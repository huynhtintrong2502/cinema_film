<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\slidepanel;
use App\phimtheloai;
use App\suatchieu;

class SuatChieuController extends Controller
{
    public function get_masc($giochieu)
    {
        return suatchieu::where('TGBatDau','=',$giochieu)->first();
    }

    public function getsuatchieu_id($id)
    {
        return suatchieu::where([
            ['MaSC','=',$id],
            ['Xoa','=',0]
        ])->first();
    }

    
    
}
