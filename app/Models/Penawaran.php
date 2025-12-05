<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    protected $table = 'penawaran';
    protected $fillable = [
        'nomor',
        'tanggal',
        'pemberi',
        'jenis_aset',
        'maksud',
        'tujuan',
        'nilai_kebutuhan',
        'biaya',
        'norek',
    ];
}
