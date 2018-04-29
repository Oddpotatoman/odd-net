<?php

namespace App\Http\Controllers;

use App\Oddnote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OddnoteController extends Controller
{
    public function index(){
        return view('/oddnotes/index');
    }
    public function viewNote(){

    }
    public function generateLink(){
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 10;
        $link = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
        $check = DB::table('oddnotes')->where('link',$link)->get();
        if(!isset($check['items'])){
            return $link;
        } else {
            return null;
        }
    }
    public function addNote(){
        $this->validate(request(),[
            'text'=> 'required'
        ]);
        $link = null;
        while ($link == null) {
            $link = $this->generateLink();
        }
        Oddnote::create([
            'text'=>encrypt(request('text')),
            'link'=> $link
        ]);
        return $link;
    }
    public function link($link){
        return view('/oddnotes/getlink',compact('link'));
    }
    public function getLinkData(){
        $link = \request('link');
        $link_data = DB::table('oddnotes')->where('link', $link)->get();
        if($link_data[0]->text != 'used') {
            DB::table('oddnotes')->where('link', $link)->update(['text' => 'used']);
            return decrypt($link_data[0]->text);
        }else {
            return 'used';
        }
    }
}
