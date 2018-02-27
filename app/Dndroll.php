<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dndroll extends Model
{
    protected $fillable = ['dndtable_id', 'text'];
    public $timestamps = false;

    public function dndtable(){
        return $this->belongsTo(Dndtable::class);
    }
}
