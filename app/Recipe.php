<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
