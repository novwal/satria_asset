<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterLokasiController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data master lokasi (jika ada)
        return view('master_lokasi'); // Sesuaikan dengan nama view Anda
    }
}

