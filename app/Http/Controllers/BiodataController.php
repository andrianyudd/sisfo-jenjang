<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        return view('biodata'); // view biodata.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:biodatas,nim',
            'prodi' => 'required|string',
            'email' => 'required|email|max:100',
            'nohp' => 'required|string|max:15',
        ]);

        Biodata::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp' => $request->nohp,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function pengajuanKonversi()
    {
        $biodatas = Biodata::all(); // Atau where kondisi jika perlu
        return view('pengajuan_konversi', compact('biodatas'));
    }
}
