<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function postFile($request){
        // $file = $request->filesTest; //$request->file('file')->hashName();
        // dd($file);
        // $firstName = "";
        // $firstName = $file->getClientOriginalName();
        if($request->hash_file('myFile')){
            return 1;

        }
        else return 0;
    }
}
