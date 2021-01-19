<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lichchieuphim;
use Carbon\Carbon;
use App\suatchieu;
use App\phim;
use App\ghe;
use App\loaighe;

class GheController extends Controller
{
    public function get_ghe($maghe)
    {
        return ghe::where([
            ['ghe.MaGhe','=',$maghe],
            ['ghe.Xoa','=',0]
        ])->join('loaighe', 'loaighe.MaLoaiGhe', '=', 'ghe.MaLoaiGhe')->get()->first();

    }
}
