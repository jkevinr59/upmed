<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    //
    protected $table = 'profil';
    protected $fillable = ['UID','Nama Lengkap','Alamat','HP','User','Username','Kodepos','Foto','Umur','Golongan_darah','berat_badan','tinggi_badan','riwayat_penyakit','No_BPJS','No_KTP','Kota','Pekerjaan'];
    public $timestamps=false;
}
