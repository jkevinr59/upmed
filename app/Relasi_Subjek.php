<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relasi_Subjek extends Model
{
    protected $table = 'relasi_subjek';
     protected $fillable = ['id','id_subjek','id_relasi'];
}
