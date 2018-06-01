<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service_management';
    protected $fillable = ['id','name','region','description','manager_1','manager_2','manager_3','status'];
    public $timestamps=false;
}
