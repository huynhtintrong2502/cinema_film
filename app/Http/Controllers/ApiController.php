<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\api_maphim;
use App\api_user;
use App\api_timkiem;
use App\api_ve;
use Carbon\Carbon;
use DateTime;
use Session;
class ApiController extends Controller
{

    public function api_maphim()
    {
        return api_maphim::where('Id','=',1)->first();//api_maphim::find(1);//api_maphim::orderBy('Id','DESC')->first();
    }

    public function api_user()
    {
        return api_user::where('Id','=',1)->first();//api_maphim::find(1);//api_maphim::orderBy('Id','DESC')->first();
    }

    public function api_search()
    {
        return api_timkiem::where('Id','=',1)->first();//api_maphim::find(1);//api_maphim::orderBy('Id','DESC')->first();
    }

    public function api_ve()
    {
        return api_ve::get()->first();//api_maphim::find(1);//api_maphim::orderBy('Id','DESC')->first();
    }

    public function luu_MaPhim($MaPhim)
    {
        $mp = api_maphim::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'MaPhim'=> $MaPhim
        ]);
        return 1;
    }


    public function luu_User($Id_nguoidung)
    {
        $mp = api_user::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Id_nguoidung'=> $Id_nguoidung,
             'updated_at' => new DateTime(),
        ]);
        return 1;
    }

    public function luu_User_1($Id_nguoidung)
    {
        $mp = api_user::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Id_nguoidung'=> $Id_nguoidung,
             'updated_at' => new DateTime(),
        ]);
        return 1;
    }
    public function luu_Userkhach($id)
    {
        $mp = api_user::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Id_khach'=> $id,
             'updated_at' => new DateTime(),
        ]);
        return 1;
    }

    public function luu_timkiem($noidung,$by_search)
    {
        $mp = api_timkiem::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'search_text'=> $noidung,
             'by_search'=> $by_search
        ]);
        return 1;
    }

    public function luu_api_ve_maghe($maghe)
    {
        $mp = api_ve::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'MaGhe'=> $maghe,
        ]);
        return 1;
    }
    public function luu_api_ve_masc_rap($masc,$marap)
    {
        $mp = api_ve::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
        
            $mp->update([
                'MaSC'=> $masc,
                'MaRap' => $marap
            ]);
        
        return 1;
    }
    public function luu_api_ve_maphim($maphim)
    {
        $mp = api_ve::where('Id','=',1)->get()->first(); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'MaPhim'=> $maphim
        ]);
        return 1;
    }
    public function luu_api_ve_ngayxem($ngayxem)
    {
        $date = Carbon::parse($ngayxem)->format('Y/m/d');
        $mp = api_ve::where('Id','=',1); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'NgayXem'=> $date
        ]);
        return 1;
    }
    

   
}
