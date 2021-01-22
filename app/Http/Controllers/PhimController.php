<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\api_maphim;
use App\phim;
use App\theloai;
use App\lichchieuphim;
use App\imgtrailer;


use Carbon\Carbon;


class PhimController extends Controller
{
    

    public function getfilm_first()
    {
        $mp = api_maphim::where('Id','=',1)->first()->MaPhim;
        // return phim::where('MaPhim','=',$mp)->first()->MaPhim ;
        return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                ->join('imgtrailer', 'phim.MaPhim', '=', 'imgtrailer.MaPhim')
                ->select('phim.*','theloai.TenTheLoai','imgtrailer.*')
                ->where([
                    ['phim.MaPhim','=',$mp],
                    ['phim.Xoa','=',0]
                ])->first();
    }

    

    public function search_film($search_text,$by_search)
    {
        if($by_search == 1)
            return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                    ->select('phim.*','theloai.*')
                    ->where([
                        ['phim.TenPhim','like','%' .$search_text.'%'],
                        ['phim.Xoa','=',0]
            ])->get();
        
        if($by_search == 2)
            return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                    ->select('phim.*','theloai.*')
                    ->where([
                        ['phim.DaoDien','like','%' .$search_text.'%'],
                        ['phim.Xoa','=',0]
            ])->get();
        if($by_search == 3)
            return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                    ->select('phim.*','theloai.*')
                    ->where([
                        ['phim.QuocGia','like','%' .$search_text.'%'],
                        ['phim.Xoa','=',0]
            ])->get();
        if($by_search == 4)
            return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                    ->select('phim.*','theloai.*')
                    ->where([
                        ['theloai.TenTheLoai','like','%' .$search_text.'%'],
                        ['phim.Xoa','=',0]
            ])->get();
        if($by_search == 5)
            return phim::join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                    ->select('phim.*','theloai.*')
                    ->where([
                        ['phim.NamSX','=',$search_text],
                        ['phim.Xoa','=',0]
            ])->get();
        return 1;
    }

    public function insert_phim($tenphim,$daodien,$quocgia,$namsanxuat,$thoiluong,$ngonngu,$noidung,$theloai,$nhacungcap,$tuoigioihan,$anhhienthi,$trailer)
    {
        $date= Carbon::parse(Carbon::now())->format('Y/m/d');
        $phim = new phim;
        $phim->TenPhim = $tenphim;
        $phim->MaNCC = $nhacungcap;
        $phim->DaoDien = $daodien;
        $phim->QuocGia = $quocgia;
        $phim->NamSX = $namsanxuat;
        $phim->ThoiLuong = $thoiluong;
        $phim->NgonNgu = $ngonngu;
        $phim->NoiDung = $noidung;
        $phim->MaTL = $theloai;
        $phim->DanhGia = 0;
        $phim->AgeDuocXem = $tuoigioihan;
        $phim->NgayMua = $date;
        $phim->AnhHienThi = $anhhienthi;
        $phim->trailer = $trailer;

        $phim->created_at = Carbon::parse(Carbon::now());

        $phim->save();

        return $phim;
    }

    public function get_film()
    {
        return phim::orderBy('DanhGia','DESC')
                ->join('theloai', 'phim.MaTL', '=', 'theloai.MaTL')
                ->select('phim.*', 'theloai.TenTheLoai')
                ->where('phim.Xoa','=',0)->get();
    }

    public function xoa_phim($maphim)
    {
        $mp = phim::where('MaPhim','=',$maphim); 
            
        $mp->update([
             'Xoa'=> 1
        ]);
        return $mp->first()->TenPhim;
    }


    public function update_phim($tenphim,$daodien,$quocgia,$namsanxuat,$thoiluong,$ngonngu,$noidung,$theloai,$nhacungcap,$tuoigioihan)
    {

        $mp = phim::where('MaPhim','=',$maphim); 
            
        $mp->update([
             'TenPhim'=> $tenphim,
             'MaNCC'=> $nhacungcap,
             'DaoDien'=> $daodien,
             'QuocGia'=> $quocgia,
             'NamSX'=> $namsanxuat,
             'ThoiLuong'=> $thoiluong,
             'NgonNgu'=> $ngonngu,
             'MaTL'=> $theloai,
             'NoiDung'=> $noidung,
             'AgeDuocXem'=> $tuoigioihan,

        ]);
        return $mp->first()->TenPhim;

       
    }
}
