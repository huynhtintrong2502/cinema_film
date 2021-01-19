<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhacungcap;
use DateTime;

class NhaCungCapController extends Controller
{
    public function get_nhacungcap()
    {
        return nhacungcap::where('Xoa','=',0)->get();
    }

    public function get_nhacungcap_first($id)
    {
        return nhacungcap::where('MaNCC','=',$id)->first();
    }

    public function update_nhacungcap($id,$tenhacungcap,$diachi,$sdt)
    {
        $mp = nhacungcap::where('MaNCC','=',$id); 
            
        $mp->update([
             'TenNCC'=> $tenhacungcap,
             'DiaChi'=> $diachi,
             'SDT'=> $sdt,
             'updated_at' => new DateTime(),
        ]);
        return 1;
    }

    public function create_nhacungcap($tenhacungcap,$diachi,$sdt)
    {
        $ncc = new nhacungcap;
        $ncc->TenNCC = $tenhacungcap;
        $ncc->DiaChi = $diachi;
        $ncc->SDT = $sdt;
        $ncc->created_at = new datetime();

        $ncc->save();

        return $ncc->TenNCC;
    }

    public function xoa_nhacungcap($id)
    {
        $mp = nhacungcap::where('MaNCC','=',$id); 
            
        $mp->update([
             'Xoa'=> 1,
             'updated_at' => new DateTime(),
        ]);
        return $mp->first()->TenNCC;
    }
    
}
