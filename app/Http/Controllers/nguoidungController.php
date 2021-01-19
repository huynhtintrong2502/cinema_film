<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\nguoidung;
use App\khachhang;
use Datetime;


class nguoidungController extends Controller
{
    public function getList()
    {
        return nguoidung::orderBy('id','DESC')->get();
    }

    public function getuserfirst($username,$password)
    {
        return nguoidung::where([['UserName','=',$username],['PassWord','=',$password],['Xoa','=',0]])->get()->first();
    }

    public function testdangky($username)
    {
        $t = nguoidung::where([['UserName','=',$username],['Xoa','=',0]])->get();
        if($t->count()!=0)
            return 1;
        else return 0;
    }

    

    public function getUser($id)
    {
        return khachhang::where('ID','=',$id)->first();
    }

    public function create_user($username,$password,$MaUT)
    {
        $cmt = new nguoidung;
        $cmt->MaUT = $MaUT;
        $cmt->UserName = $username;
        $cmt->PassWord = $password;
        $cmt->created_at = new Datetime();

        $cmt->save();

        return $cmt;
    }

    
}
