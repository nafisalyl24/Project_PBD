<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //ini gunanya apa? apa ini folder? kalo iya, liat di mana?

class BarangController extends Controller
{
    public function index()
    {
        $barangs = DB::select('select * from v_master_barang');

        return view('barang.index', compact('barangs') );

        //kok barang.index? compact itu buat apa?
        //return view itu buat apa?

        //DB::select() adalah perintah yang mengambil data dari MySQL.
    }
}
