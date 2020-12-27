<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
class TrangChuController extends Controller
{
    public function PhimMoi()
    {
        return phim::orderBy('MaPhim','DESC')->get();
    }
}
