<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengesahan extends Model
{
    protected $table = 'pengesahan';
    protected $fillable = [
        'nama_pimpinan',
        'jabatan_pimpinan',
        'NIP_pengesahan',
         	 	 
    ];
    public function post()
    {
        return $this->belongsTo('App\Post','id_post');
    }
}
