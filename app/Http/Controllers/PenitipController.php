<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penitip;
use Redirect;
use DB;
class PenitipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $penitip = Penitip::all();
        return view('penitip.index',compact('penitip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('penitip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penitip = new Penitip;
        $penitip->nama = $request->nama;
        $penitip->alamat = $request->alamat;
        $penitip->no_tlp = $request->no_tlp;
        $penitip->no_ktp = $request->no_ktp;
        $penitip->tgl_titip = $request->tgl_titip;
        $penitip->save();
        return redirect('penitip');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penitip = Penitip::find($id);
        return view('penitip.edit')->with(compact('penitip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penitip = Penitip::find($id);
        $penitip->nama = $request->nama;
        $penitip->alamat = $request->alamat;
        $penitip->no_tlp = $request->no_tlp;
        $penitip->no_ktp = $request->no_ktp;
        $penitip->tgl_titip = $request->tgl_titip;

        $penitip->save();
        return redirect()->route('penitip.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penitip = Kategori::find($id);
        $penitip->delete();

        return redirect()->route('penitip.index');
    }
}