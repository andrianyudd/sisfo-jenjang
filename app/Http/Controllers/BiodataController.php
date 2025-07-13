<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = \App\Models\Biodata::where('email', auth()->user()->email)->first();
        return view('biodata', compact('biodata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'prodi' => 'required|string',
            'email' => 'required|email|max:100',
            'nohp' => 'required|string|max:15',
        ]);

        $biodata = \App\Models\Biodata::where('email', $request->email)->first();
        if ($biodata) {
            $biodata->update([
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'nohp' => $request->nohp,
            ]);
        } else {
            \App\Models\Biodata::create([
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'email' => $request->email,
                'nohp' => $request->nohp,
            ]);
        }

        // Update nama di tabel users juga
        $user = auth()->user();
        $user->name = $request->nama;
        $user->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function pengajuanKonversi()
    {
        $biodatas = Biodata::all(); // Atau where kondisi jika perlu
        return view('pengajuan_konversi', compact('biodatas'));
    }
}
