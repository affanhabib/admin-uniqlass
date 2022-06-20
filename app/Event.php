<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'poster', 'program', 'subprogram', 'judul_event', 'slug', 'tanggal_mulai', 'tanggal_berakhir',
        'waktu', 'narasumber', 'lokasi', 'deskripsi', 'link', 'show_carousel', 'inputer'
    ];
}
