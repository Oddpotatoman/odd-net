<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Storage;


class DownloadSecretController extends Controller
{
    public function downloadFile($fileNameInHash){
        return view('download',['hash' => $fileNameInHash]);
    }
    public function authDown($hash){
        $path = base64_decode($hash);
        if (request('secretinput') == "m*Ka;sn-DkK#oi/&&97?!8"){
            return Storage::download($path);
        }
    }
}
