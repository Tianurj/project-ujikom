<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Tentang;
use App\Kontak;
class UserController extends Controller
{
    public function home()
    {
        
        $barang = Barang::orderby('id','desc')->paginate(24);
        return view('user.home',compact('barang'));
    }
    public function product(Request $request)
    {
        if (empty($request->get('cari'))) {
            $barang = Barang::orderby('id','desc')->paginate(20);
        } else {
            $barang = Barang::Where('nama', 'LIKE', '%' . $request->get('cari') . '%')->paginate(20);
        }
        $kategori   = Kategori::all();
        return view('user.product',compact('barang','kategori'));
    }
    public function kategoris($id = null)
    {
        $barang = Barang::where('kategori_id',$id)->paginate(20);
        $kategori   = Kategori::all();
        return view('user.product',compact('barang','kategori'));
    }
    public function lihat($id = null)
    {
        $barang = Barang::find($id);
        $barang2   = Barang::orderby('id','desc')->paginate(6);
        return view('user.lihat',compact('barang','barang2'));
    }
    public function tentang()
    {
        $tentang    =   Tentang::all();
        return view('user.about',compact('tentang'));
    }
    public function kontak()
    {
        $kontak    =   Kontak::all();
        return view('user.contact',compact('kontak'));
    }    
}
