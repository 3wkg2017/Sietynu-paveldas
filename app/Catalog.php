<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public function image()
    {
        return $this->hasMany('App\Image');
    }
    public function reference()
    {
        return $this->hasMany('App\Reference');
    }
}

