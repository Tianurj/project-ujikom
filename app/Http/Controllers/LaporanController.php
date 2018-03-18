<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('laporan.jual',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $penjualan = Penjualan::whereBetween('created_at', [$a, $b])->get();
        $sum = $penjualan->sum('total');
        return view('laporan.jual1', compact('penjualan','a','b','sum'));
    }
}
