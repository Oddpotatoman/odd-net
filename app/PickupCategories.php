<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickupCategories extends Model
{
    public function pickuplines(){
        return $this->belongsToMany(PickupLines::class);
    }
}
