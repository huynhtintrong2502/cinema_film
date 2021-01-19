<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;
use App\loaikhachhang;
use Datetime;
use Carbon\Carbon;

class KhachHangController extends Controller
{
    public function get_khach_hang($Id)
    {

        return khachhang::join('loaikhachhang', 'khachhang.MaLoaiKH', '=', 'loaikhachhang.MaLoaiKH')->where([
            ['khachhang.ID','=',$Id],
            ['khachhang.Xoa','=',0]
        ])->select('khachhang.*','loaikhachhang.TenLoaiKH')->get()->first();

    }

    public function getlistkhachhang()
    {
        return khachhang::where([
            ['Xoa','=',0]
        ])->get();
    }

    public function xoa_khachhang($id)
    {
        $mp = khachhang::where('ID','=',$id)->first(); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Xoa'=> 1,
             'updated_at' => new DateTime(),
        ]);
        return $mp;
    }

    public function update_khachhang($id,$hoten,$gioitinh,$ngaysinh,$email,$sodienthoai,$cmnd,$anh,$diachi)
    {
        $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
        $mp = khachhang::where('ID','=',$id); 
        if($anh == 'macdinh' ){
            $mp->update([
                'TenKH'=> $hoten,
                'GioiTinh'=> $gioitinh,
                'CMND'=> $cmnd,
                'NgaySinh'=>$date2,
                'DiaChi'=> $diachi,
                'Email'=> $email,
                'SDT'=> $sodienthoai,
                'updated_at' => new DateTime(),
           ]);
        }
        else{
            $mp->update([
                'TenKH'=> $hoten,
                'GioiTinh'=> $gioitinh,
                'CMND'=> $cmnd,
                'NgaySinh'=>$date2,
                'DiaChi'=> $diachi,
                'Email'=> $email,
                'SDT'=> $sodienthoai,
                'Anh'=> $anh,
                'updated_at' => new DateTime(),
           ]);
        }
            
        
        return khachhang::where('ID','=',$id)->first();
    }


    public function create_khachhang($id)
    {
            $mp = new khachhang;
            $mp->ID = $id;
            $mp->MaLoaiKH = 2;
            $mp->created_at = new datetime();
            $mp->save();
       
        
        return $mp;
    }

}
