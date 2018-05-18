<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddnote extends Model
{
    protected $fillable = array('id','text','iv','salt');
    public $timestamps = false;

}
