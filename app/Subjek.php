<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjek extends Model
{
    //
    protected $table = 'subjek';
    protected $fillable = ['id','Name','Group','Type'];
}
