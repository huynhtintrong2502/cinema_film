<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XemChiTietController extends Controller
{
    public function PhimMoi()
    {
        $mp = api_maphim::where('Id','=',1)->MaPhim;
        return api_maphim::findOrFail($mp);
    }
}
