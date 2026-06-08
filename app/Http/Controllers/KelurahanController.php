<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class KelurahanController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function penduduk()
    {
        $warga = Penduduk::all(); 
        return view('penduduk', compact('warga'));
    }
}
