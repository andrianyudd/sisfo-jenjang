<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            // 'biodata_id' => 'required|exists:biodatas,id', // Dihilangkan agar tidak wajib
            'file.transkrip' => 'nullable|mimes:pdf|max:5120', // 5MB
            'file.ijazah' => 'nullable|mimes:pdf|max:5120',
            'file.akreditasi_pt' => 'nullable|mimes:pdf|max:5120',
            'file.akreditasi_ps' => 'nullable|mimes:pdf|max:5120',
        ]);

        $dokumenTypes = [
            'transkrip' => 'Transkrip Nilai',
            'ijazah' => 'Ijazah',
            'akreditasi_pt' => 'Akreditasi Perguruan Tinggi',
            'akreditasi_ps' => 'Akreditasi Program Studi',
        ];

        foreach ($dokumenTypes as $key => $nama) {
            if ($request->hasFile("file.$key")) {
                $path = $request->file("file.$key")->store('dokumen', 'public');
                \App\Models\Dokumen::create([
                    // 'biodata_id' => $request->biodata_id, // Dihilangkan
                    'nama_dokumen' => $nama,
                    'path_file' => $path,
                    'tipe_dokumen' => 'pdf',
                ]);
            }
        }

        return back()->with('success', 'Dokumen berhasil diunggah!');
    }
}
