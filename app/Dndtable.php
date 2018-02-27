<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Dndtable extends Model
{
    protected $fillable = ['tableName', 'from', 'previous_table', 'next_table'];
    public $timestamps = false;

    public function dndrolls(){
        return $this->hasMany(Dndroll::class);
    }
}
