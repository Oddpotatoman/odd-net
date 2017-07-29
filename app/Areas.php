<?php

namespace App;

use PhpParser\Builder\Class_;

class Areas extends Model
{
    public function points(){
        return $this->hasMany(Points::class);
    }
}
