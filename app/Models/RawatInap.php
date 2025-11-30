<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    use HasFactory;

    protected $table = 'rawat_inap';
    protected $primaryKey = 'id_rawat_inap';
    public $timestamps = false;

    protected $fillable = [
        'id_pasien',
        'id_kamar',
        'tanggal_masuk',
        'tanggal_keluar'
    ];
}
