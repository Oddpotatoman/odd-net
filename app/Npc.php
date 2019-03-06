<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Npc extends Model
{
    protected $fillable = ['tableName', 'from', 'previous_table', 'next_table'];

    public function tags(){
        $this->hasMany(Tag::class);
    }

}
