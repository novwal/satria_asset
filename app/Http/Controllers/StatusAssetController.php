<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusAssetController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data status asset (jika ada)
        return view('status_asset'); // Sesuaikan dengan nama view Anda
    }
}
