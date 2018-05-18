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
    public function check_id(){
        $check = DB::table('oddnotes')->where('id',request('id'))->get();
        if(!isset($check['items'])){
            return "not used";
        } else {
            return "used";
        }
    }
    public function addNote(){
        $this->validate(request(),[
            'text'=> 'required'
        ]);
        $data = json_decode(\request('text'));
        Oddnote::create([
            'id'=> \request('id'),
            'text'=>$data->ct,
            'salt'=>$data->salt,
            'iv'=>$data->iv
        ]);
        return 'success';
    }
    public function link($link){
        return view('/oddnotes/getlink',compact('link'));
    }
    public function getLinkData(){
        $link = \request('link');
        $encrypted = json_decode('{"v":1,"iter":10000,"ks":128,"ts":64,"mode":"ccm","adata":"","cipher":"aes"}');

        $link_data = DB::table('oddnotes')->where('id', $link)->get();
        if($link_data[0]->text != 'used') {
            $encrypted['iv'] = $link_data[0]->iv;
            $encrypted['salt'] = $link_data[0]->salt;
            $encrypted['ct'] = $link_data[0]->ct;
            $encryptedJson = json_encode($encrypted);
            DB::table('oddnotes')->where('link', $link)->update(['text' => 'used']);
            return $encryptedJson;
        }else {
            return 'used';
        }
    }
}
