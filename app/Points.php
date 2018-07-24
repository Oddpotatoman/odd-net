<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Points extends Model
{
    public function area() {
        return $this->belongsTo(Areas::class);
    }
    public function givePoints($points){
        Points::create([
            'area_id' => $points['area_id'],
            'points' => $points['points'],
            'body' => $points['body'],
            'bywho' => $points['bywho'],
        ]);
    }
}
