<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\theloai;
use DateTime;

class TheLoaiPhimController extends Controller
{
    public function get_theloai()
    {
        return theloai::where('Xoa','=',0)->get();
    }

    public function get_tentheloai($id)
    {
        return theloai::where('MaTL','=',$id)->first()->TenTheLoai;
    }

    public function update_theloai($id,$tentheloai)
    {
        $mp = theloai::where('MaTL','=',$id); 
            
        $mp->update([
             'TenTheLoai'=> $tentheloai,
             'updated_at' => new DateTime(),
        ]);
        return 1;
    }

    public function create_theloai($tentheloai)
    {
        $tl = new theloai;
        $tl->TenTheLoai = $tentheloai;
        $tl->created_at = new datetime();

        $tl->save();

        return $tl->TenTheLoai;
    }


    public function xoa_theloai($id)
    {
        $mp = theloai::where('MaTL','=',$id); 
            
        $mp->update([
             'Xoa'=> 1,
             'updated_at' => new DateTime(),
        ]);
        return $mp->first()->TenTheLoai;
    }
   
}
