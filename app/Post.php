<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'id',
        'id_User',
        'Nama_Artikel',
        'Nomer_DOI_Artikel',
        'Cakupan_Bidang_Ilmu',
        'kontribusi',
        'Bidang_Ilmu_Pengusul',
        'Alamat_Redaksi',
        'Alamat_URL',
        'Penerbit',
        'Tanggal_Penerbitan',
        'Nama_Program',
        'Nomor_Kontrak',
        'Lembaga_Pemberi_Dana',
        'Tempat_Penelitian',
        'keterangan',
        'lampiran1',
        'jenis_artikel',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','id','id_User');
    }
    public function Lpengindex()
    {
        return $this->hasMany('App\Lpengindex','id_post');
    }
}
