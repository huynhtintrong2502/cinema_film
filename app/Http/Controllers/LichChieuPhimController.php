<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lichchieuphim;
use Carbon\Carbon;
use App\suatchieu;
use App\phim;
use Datetime;

class LichChieuPhimController extends Controller
{
    public function get_suatchieu($MaPhim,$MaRap)
    {
        return lichchieuphim::where([
            ['lichchieuphim.MaPhim','=',$MaPhim],
            ['lichchieuphim.MaRap','=',$MaRap],
            ['lichchieuphim.Xoa','=',0]
        ])->join('suatchieu', 'lichchieuphim.MaSC', '=', 'suatchieu.MaSC')
        ->select('lichchieuphim.*','suatchieu.*')->orderBy('suatchieu.TGBatDau','ASC')->get();

    }

    public function listchieuphim()
    {
        $date = Carbon::parse(Carbon::now())->format('Y/m/d');
        Carbon::parse(Carbon::now())->format('d/m/Y');
        return phim::join('lichchieuphim', 'lichchieuphim.MaPhim', '=', 'phim.MaPhim')->where([
            ['phim.Xoa','=',0],
            ['lichchieuphim.Xoa','=',0],
            ['lichchieuphim.NgayChieu','>=',$date]
        ])
        ->select('lichchieuphim.*','phim.*')->orderBy('phim.TenPhim','DESC')->get();
    }

    public function get_ngaychieu_suatchieu($date,$date_finish)
    {
        $date = Carbon::parse($date)->format('Y/m/d');
        $date1 = Carbon::parse($date_finish)->format('Y/m/d');
        return lichchieuphim::join('suatchieu', 'lichchieuphim.MaSC', '=', 'suatchieu.MaSC')->where([
            ['lichchieuphim.Xoa','=',0],
            ['lichchieuphim.NgayChieu','>=',$date],
            ['lichchieuphim.NgayChieu','<=',$date1]
        ])
        ->select('lichchieuphim.*','suatchieu.*')->orderBy('suatchieu.MaSC','DESC')->get();
    }

    public function create_lichchieu($MaPhim,$NgayChieu,$MaRap,$MaSC)
    {
        $date = Carbon::parse($NgayChieu)->format('Y/m/d');
        $cmt = new lichchieuphim;
        $cmt->MaPhim = $MaPhim;
        $cmt->NgayChieu = $date;
        $cmt->MaRap = $MaRap;
        $cmt->MaSC = $MaSC;
        $cmt->created_at = new datetime();

        $cmt->save();

        return $cmt;
    }
}
