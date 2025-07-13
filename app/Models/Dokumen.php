<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'nama_dokumen',
        'path_file',
        'tipe_dokumen',
    ];

    // Relasi ke Biodata (optional)
    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}
