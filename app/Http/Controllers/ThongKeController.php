<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ve;
use App\phim;
use App\slidepanel;
use App\phimtheloai;
use App\lichchieuphim;
use App\khachhang;
use Carbon\Carbon;

class ThongKeController extends Controller
{
    public function thongke_doanhthu_nguoixem($theo,$next,$loai)
    {
        $datenow = Carbon::now()->subDays($next)->format('Y/m/d');
        $gioihan = Carbon::now()->subDays($theo)->format('Y/m/d');
        if($loai == 1){
            return ve::where([
                ['NgayMua','>=',$gioihan],
                ['NgayMua','<',$datenow]
            ])->sum('GiaVe');
        }
        else if($loai == 2){
            return ve::where([
                ['NgayMua','>=',$gioihan],
                ['NgayMua','<',$datenow]
            ])->count();
        }
        
    }


    public function thongke_thanhvienmoi($theo,$next)
    {
        $datenow = Carbon::now()->subDays($next)->format('Y/m/d');
        $gioihan = Carbon::now()->subDays($theo)->format('Y/m/d');
        return khachhang::where([
                ['created_at','>=',$gioihan],
                ['created_at','<',$datenow]
            ])->count();
    }

    public function thongke_phimmoi($theo,$next)
    {
        $datenow = Carbon::now()->subDays($next)->format('Y/m/d');
        $gioihan = Carbon::now()->subDays($theo)->format('Y/m/d');
        return phim::where([
                ['NgayMua','>=',$gioihan],
                ['NgayMua','<',$datenow]
            ])->count();
    }



    public function thongke_doanhthu_nguoixem_version_2()
    {
        $list = [];
        for ($i = 1; $i <= 31; $i++){
            $j = $i-1;
            $datenow = Carbon::now()->subDays($j)->format('Y/m/d');
            $gioihan = Carbon::now()->subDays($i)->format('Y/m/d');
            $t1 = ve::where([
                        ['NgayMua','>=',$gioihan],
                        ['NgayMua','<',$datenow]
                    ])->sum('GiaVe');
            $t2 = ve::where([
                    ['NgayMua','>=',$gioihan],
                    ['NgayMua','<',$datenow]
                ])->count();
            $collection = collect([
                    'doanhthu' => $t1,
                    'nguoixem' => $t2,
                ]);
            $list[$i] = $collection;
        }
        return $list;
            
            
    }


    public function thongke_doanhthu_theophim($id)
    {
        return ve::where([
            ['MaPhim','=',$id]
        ])->sum('GiaVe');  
    }


    public function thongke_doanhthu_theokhach($id)
    {
        return ve::where([
            ['MaKH','=',$id]
        ])->sum('GiaVe');  
    }


    public function thongke_doanhthu_nhanvien($id)
    {
        return ve::where([
            ['MaNV','=',$id]
        ])->sum('GiaVe');  
    }

    public function thongke_veban_nhanvien($id)
    {
        return ve::where([
            ['MaNV','=',$id]
        ])->count();  
    }
        
        
    

    

}
