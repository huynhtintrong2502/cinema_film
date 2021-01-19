<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\api_maphim;
use App\phim;
use App\imgtrailer;

class ImgTrailerController extends Controller
{
    public function get_imgtrailer_first()
    {
        $mp = api_maphim::where('Id','=',1)->first()->MaPhim;
        // return phim::where('MaPhim','=',$mp)->first()->MaPhim ;
        return imgtrailer::where([
            ['MaPhim','=',$mp],
            ['Xoa','=',0]
        ])->first();
    }
}
