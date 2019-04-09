<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    //code untuk colom yang boleh di isi manual
    protected $fillable = ['sensor1','sensor2','sensor3','sensor4'];
}
