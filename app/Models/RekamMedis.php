<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekam_medis';
    protected $primaryKey = 'id_rekam';
    public $timestamps = false;

    protected $fillable = [
        'id_daftar',
        'id_dokter',
        'keluhan',
        'pemeriksaan_fisik',
        'diagnosa',
        'kode_icd10',
        'tindakan',
        'catatan_perkembangan'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_daftar');
    }
}
