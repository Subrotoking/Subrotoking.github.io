<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lpengindex extends Model
{
    protected $table = 'Lpengindexs';
    protected $fillable = [
        'Nama_lembaga',
        'Lembaga_penilai',
        'url_lembaga',
        'url_if',
        'url_h_index',
        'id_post',
    ];
    public function post()
    {
        return $this->belongsTo('App\Post','id_post');
    }
}
