<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertype;
use App\User_Type;
class usertypeController extends Controller
{   
    public function getList()
    {
        
       return usertype::orderBy('MaUT','DESC')->get();
    }
}
