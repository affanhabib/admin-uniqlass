<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
    	'photo', 'mitra_id'
    ];
    public function mitra()
    {
        return $this->belongsTo('App\Mitra', 'mitra_id');
    }
}
