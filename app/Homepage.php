<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = [
        'judul', 'caption', 'tombol', 'link', 'deskripsi',
        'ig1', 'ig2', 'ig3', 'yt1', 'yt2', 'yt3', 'inputer'
    ];
}
