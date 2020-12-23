<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\User_Type;
class SinhVienController extends Controller
{
    public function getList()
    {
        return SinhVien::orderBy('id','DESC')->get();
    }
    
}
