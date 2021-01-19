<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\nhanvien;
use App\lichsuwork;
use Datetime;
use Carbon\Carbon;

class NhanVienController extends Controller
{
    public function getlistnhanvien()
    {
        return nhanvien::where([
            ['Xoa','=',0]
        ])->get();
    }

    public function get_nhanvien($Id)
    {

        return nhanvien::where([
            ['ID','=',$Id],
            ['Xoa','=',0]
        ])->get()->first();

    }

    public function xoa_nhanvien($id)
    {
        $mp = nhanvien::where('ID','=',$id); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Xoa'=> 1,
             'updated_at' => new DateTime(),
        ]);
        return $mp;
    }


    public function create_nhanvien($ID,$TenNV,$GioiTinh,$CMND,$DiaChi,$SDT,$NgaySinh,$NgayBD,$Anh)
    {
        $date2 = Carbon::parse($NgaySinh)->format('Y/m/d');
        $cmt = new nhanvien;
        $cmt->ID = $ID;
        $cmt->TenNV = $TenNV;
        $cmt->GioiTinh = $GioiTinh;
        $cmt->CMND = $CMND;
        $cmt->DiaChi = $DiaChi;
        $cmt->SDT = $SDT;
        $cmt->NgaySinh = $date2;
        $cmt->NgayBD = new datetime();
        $cmt->Anh = 'anhmacdinh.jpg';
        $cmt->created_at = new datetime();

        $cmt->save();

        return $cmt;
    }


    public function get_lichsuwork($id)
    {
        return lichsuwork::where([
            ['MaNV','=',$id],
            ['Xoa','=',0]
        ])->get();
    }

}
