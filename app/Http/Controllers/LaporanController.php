<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Tiket::all();
        return view('laporan.index', compact('laporan'));
    }
}
