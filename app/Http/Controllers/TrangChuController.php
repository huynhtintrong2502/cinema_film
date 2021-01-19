<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\slidepanel;
use App\phimtheloai;
use App\lichchieuphim;

class TrangChuController extends Controller
{
    public function PhimMoi()
    {
        return phim::orderBy('MaPhim','DESC') ->where('phim.Xoa','=',0)->get();
    }
    public function SlidePanel()
    {
        return slidepanel::orderBy('ID','DESC')->get();
    }

    public function Phim_hot()
    {
        return phim::orderBy('DanhGia','DESC')
                ->join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                ->select('phim.*', 'theloai.TenTheLoai')
                ->where('phim.Xoa','=',0)
                ->limit(6)->get();
    }

    public function Phim_Sap_Chieu()
    {
        return phim::orderBy('MaPhim','DESC')
                ->join('lichchieuphim', 'phim.MaPhim', '=', 'lichchieuphim.MaPhim')
                ->join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                ->where('phim.Xoa','=',0)
                ->select('phim.*', 'lichchieuphim.NgayChieu','lichchieuphim.MaRap','lichchieuphim.MaSC','theloai.TenTheLoai')
                ->limit(8)->get();
    }
}
