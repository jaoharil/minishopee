<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class BerandaController extends Controller
{
    //
    public function index(){
        
         $produk = Produk::where('jenis_produk_id', 1)->get();

         return view('beranda', compact('produk'));
    }
}
