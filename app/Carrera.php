<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['name'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
