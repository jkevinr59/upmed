<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisa extends Model
{
    protected $table = 'analisa_kesehatan';
    protected $fillable = ['id','kondisi','hasil'];
}
