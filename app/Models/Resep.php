<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'id_resep';
    public $timestamps = false;

    protected $fillable = [
        'id_rekam',
        'tanggal_resep'
    ];

    public function rekamMedis()
    {
        return $this->belongsTo(RekamMedis::class, 'id_rekam');
    }

    public function detail()
    {
        return $this->hasMany(DetailResep::class, 'id_resep');
    }
}
