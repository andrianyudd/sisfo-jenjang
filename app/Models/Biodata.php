<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodatas';

    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'email',
        'nohp',
    ];
}
