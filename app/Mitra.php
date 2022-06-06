<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = [
    	'logo', 'nama', 'tahun_berdiri', 'deskripsi', 'lokasi', 'jadwal', 'materi', 'perlengkapan_peserta',
        'fasilitas', 'keuntungan', 'sertifikat', 'inputer'
    ];
    public function galeri()
    {
        return $this->hasMany('App\Galeri', 'mitra_id');
    }
}
