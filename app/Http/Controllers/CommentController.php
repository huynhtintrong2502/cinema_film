<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\api_maphim;
use App\phim;
use App\phimtheloai;
use App\comment;
use App\khachhang;
use DateTime;

class CommentController extends Controller
{
    public function count_comment($MaPhim)
    {
        return comment::where([
            ['MaPhim','=',$MaPhim],
            ['Xoa','=',0]
        ])->count();
    }

    public function get_list_comment($MaPhim)
    {
        return comment::join('khachhang', 'comment.MaKH', '=', 'khachhang.MaKH')
                ->select('comment.*','khachhang.TenKH')
                ->where([
                    ['comment.MaPhim','=',$MaPhim],
                    ['comment.Xoa','=',0]
                ])->get();
    }

    public function create_comment($MaPhim,$MaKH,$NoiDung)
    {
        $cmt = new comment;
        $cmt->MaPhim = $MaPhim;
        $cmt->MaKH = $MaKH;
        $cmt->ThoiGianCMT = new datetime();
        $cmt->DanhGia = 2;
        $cmt->NoiDung = $NoiDung;
        $cmt->created_at = new datetime();

        $cmt->save();

        return $cmt;
    }
}
