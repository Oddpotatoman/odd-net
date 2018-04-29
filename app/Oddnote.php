<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddnote extends Model
{
    protected $fillable = array('text','link');
    public $timestamps = false;

}
