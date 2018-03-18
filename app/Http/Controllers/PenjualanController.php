<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Barang;
use App\Penitip;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        $barang = Barang::all();
        return view('penjualan.create', compact('barang','penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = date('Y-m-d');
        $tanggal = date('H-i-s');

        $penjualan = new Penjualan;
        $penjualan->tgl = $request->tgl;
        $penjualan->barang_id = $request->barang_id;
        
        $a = Barang::where('id', $request->barang_id)->first();
        $b = $a->hargajual;
        $c = Penitip::where('id', $a->penitip_id)->first();
        // dd($a);

        $penjualan->penitip_id = $c->id;
        
        $penjualan->jumlah = $request->jumlah;
        $penjualan->harga = $b;
        $penjualan->total = $b*$request->jumlah;
        $penjualan->save();

        $barang = Barang::find($request->barang_id);
        $barang->jumlah = $barang->jumlah - $request->jumlah;
        $barang->save();
        return redirect()->route('penjualan.index');
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
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $barang = Barang::all();
        return view('penjualan.edit')->with(compact('penjualan'));
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
        $penjualan = Penjualan::findOrFail($id);
        $barang = Barang::all();
        $penjualan->tgl = $request->tgl;
        $penjualan->penitip_id = $request->penitip_id;
        $penjualan->barang_id = $request->barang_id;
        $penjualan->jumlah_beli = $request->jumlah_beli;
        $penjualan->harga = $request->harga;
        $penjualan->total = $request->total;
        $penjualan->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index');
    }
}
