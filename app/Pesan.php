<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = ['id','title','message','user','recipient','datetime','status'];
    public $timestamps=false;
}
