<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekor_medis extends Model
{
    //
     protected $table = 'rekor_medis';
     protected $fillable = ['record_id','User','Subject','Description_value','Datetime','Title'];
     public $timestamps=false;
}
