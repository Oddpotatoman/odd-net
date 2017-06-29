<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Daylog extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function selecteddaysLogs($user_id){
        return DB::table('daylogs')
            ->where('user_id',$user_id)
            ->orderBy('id', 'DESC')
            ->get();
    }
}
