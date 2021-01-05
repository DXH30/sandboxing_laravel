<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bst extends Model
{
    use HasFactory;
    protected $table = 'bst';
    protected $fillable = [
        'id',
        'KDPROPKDKAB',
        'KDPROP',
        'KDKAB',
        'KDKEC',
        'KDDESA',
        'NAMA_PROVINSI',
        'NAMA_KABKOTA',
        'NAMA_KECAMATAN',
        'NAMA_DESA',
        'ALAMAT_LENGKAP',
        'ALAMAT_CAPIL',
        'ID_DTKS',
        'ID_KELUARGA',
        'ID_ART',
        'NIK',
        'NAMA',
        'HASIL',
        'start_time',
        'end_time',
        'status_usulan',
        'status_data',
        'WIL',
        'MITRA',
        'NOREKENING',
        'FLAG',
        'FLAG_PENYALURAN',
        'FLAG_PKH_PERLUASAN',
        'NOPESERTA_PKH_SEP',
        'NOREKENING_PKH_SEP',
        'FLAG_MB9',
    ];
}
