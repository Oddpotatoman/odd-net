<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickupLines extends Model
{
    public function categories(){
        return $this->belongsToMany(PickupCategories::class);
    }
}
