<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\MataKuliah;

class KonversiController extends Controller
{
    // Menampilkan daftar mahasiswa yang mengajukan konversi
    public function index()
    {
        $biodatas = Biodata::all(); // Jika perlu filter, tambahkan whereHas dokumen
        return view('konversi.index', compact('biodatas'));
    }

    public function show($nim)
    {
        $biodata = Biodata::where('nim', $nim)->firstOrFail();
        $mataKuliah = MataKuliah::all(); // Untuk dropdown tujuan

        return view('konversi.detail', compact('biodata', 'mataKuliah'));
    }
}
