<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\ve;
use App\ghe;
use App\rap;
use App\phimtheloai;
use App\lichchieuphim;
use Carbon\Carbon;
use DateTime;

class VeController extends Controller
{
    public function listve($mp,$NgayXem,$SuatChieu)
    {
        $date = Carbon::parse($NgayXem)->format('Y/m/d');
        return ve::where([
            ['MaPhim','=',$mp],
            ['NgayXem','=',$date],
            ['MaSC','=',$SuatChieu],
            ['Xoa','=',0]
        ])->get();
    }


    public function ve_first($mp,$NgayXem,$SuatChieu,$marap,$maghe)
    {
        $date = Carbon::parse($NgayXem)->format('Y/m/d');
        return ve::where([
            ['MaPhim','=',$mp],
            ['NgayXem','=',$date],
            ['MaSC','=',$SuatChieu],
            ['MaGhe','=',$maghe],
            ['MaRap','=',$marap],
            ['Xoa','=',0]
        ])->get()->first();
    }

    public function create_ve($MaSC,$MaGhe,$MaKH,$MaPhim,$NgayXem,$NgayMua,$GiaVe)
    {
        $date1 = Carbon::parse($NgayXem)->format('Y/m/d');
        $date2 = Carbon::parse($NgayMua)->format('Y/m/d');
        $ve = new ve;
        $ve->MaNV = 2;
        $ve->MaSC = $MaSC;
        $ve->MaGhe = $MaGhe;
        $ve->MaKH = $MaKH;
        $ve->MaPhim = $MaPhim;
        $ve->NgayXem = $date1;
        $ve->NgayMua = $date2;
        $ve->GiaVe = $GiaVe;
        $ve->created_at = new datetime();
        $ve->save();
        return $ve;
    }

    public function listve_khachhang($id)
    {
        return ve::join('phim', 've.MaPhim', '=', 'phim.MaPhim')->where([
            ['ve.MaKH','=',$id]
        ])->select('ve.*','phim.*')->get();
    }


    public function listve_nhanvien($id)
    {
        return ve::join('phim', 've.MaPhim', '=', 'phim.MaPhim')->where([
            ['ve.MaKH','=',$id]
        ])->select('ve.*','phim.*')->get();
    }

    public function get_vefirst($id)
    {
        return ve::join('phim', 've.MaPhim', '=', 'phim.MaPhim')
        ->join('ghe', 've.MaGhe', '=', 'ghe.MaGhe')
        ->join('rap', 've.MaRap', '=', 'rap.MaRap')
        ->join('suatchieu', 've.MaSC', '=', 'suatchieu.MaSC')
        ->where([
            ['ve.MaVe','=',$id],
            ['ve.Xoa','=',0]
        ])->select('ve.*','phim.*','ghe.*','rap.*','suatchieu.*')->get()->first();
    }
}
