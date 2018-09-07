<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Tag extends Model
{
    public $timestamps = false;

    public function npcs(){
        return $this->belongsToMany(Npc::class);
    }
}
