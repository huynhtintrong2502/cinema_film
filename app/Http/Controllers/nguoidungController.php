<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nguoidungController extends Controller
{
    public function getList()
    {
        return nguoidung::orderBy('id','DESC')->get();
    }
}
