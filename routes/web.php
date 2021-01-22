<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/listphim',function(){
    return view('listphim');
});

Route::get('/signin',function(){
    return view('signin');
});

Route::get('/signup',function(){
    return view('signup');
});

Route::get('/xemchitiet',function(){
    return view('xemchitiet');
});
Route::get('/test',function(){
    return view('test');
});
Route::get('/trangchu',function(){
    return view('trangchu');
});

Route::get('/book_1',function(){
    return view('book_1');
});

Route::get('/book_2',function(){
    return view('book_2');
});

Route::get('/book_3',function(){
    return view('book_3');
});
Route::get('/book_final',function(){
    return view('book_final');
});

Route::get('/account_khachhang',function(){
    return view('account_khachhang');
});


// admin
Route::get('admin/dashboard',function(){
    return view('admin/dashboard');
});
Route::get('admin/add_film',function(){
    return view('admin/add_film');
});
Route::get('admin/list_user',function(){
    return view('admin/list_user');
});

Route::get('admin/insert_film',function(){
    return view('admin/insert_film');
});

Route::get('admin/insert_ncc_loaiphim',function(){
    return view('admin/insert_ncc_loaiphim');
});

Route::get('admin/list_film',function(){
    return view('admin/list_film');
});

Route::get('admin/xemchitiet',function(){
    return view('admin/xemchitiet');
});

Route::get('admin/suatchieu',function(){
    return view('admin/suatchieu');
});

Route::get('admin/list_khachhang',function(){
    return view('admin/list_khachhang');
});

Route::get('admin/list_nhanvien',function(){
    return view('admin/list_nhanvien');
});

Route::get('admin/insert_nhanvien',function(){
    return view('admin/insert_nhanvien');
});

Route::get('admin/profile_khachhang',function(){
    return view('admin/profile_khachhang');
});

Route::get('admin/profile_nhanvien',function(){
    return view('admin/profile_nhanvien');
});

//post file
Route::get('postFile/{file}',['uses'=>'UploadFileController@postFile']);

Route::get('list1',['uses'=>'SinhVienController@getList']);

Route::get('list2',['uses'=>'usertypeController@getList']);

// api trang chủ: index

Route::get('phimmoi',['uses'=>'TrangChuController@PhimMoi']);

Route::get('xoa_phim/{maphim}',['uses'=>'PhimController@xoa_phim']);

Route::get('get_film',['uses'=>'PhimController@get_film']);

Route::get('slidepanel',['uses'=>'TrangChuController@SlidePanel']);

Route::get('phimhot',['uses'=>'TrangChuController@Phim_hot']);

Route::get('lichchieu',['uses'=>'TrangChuController@Phim_Sap_Chieu']);



//api trang xem chi tiết

Route::get('getfilmfirst',['uses'=>'PhimController@getfilm_first']);

Route::get('getfilmfirstid/{id}',['uses'=>'PhimController@getfilm_first_id']);

Route::get('getfilm_first_id_1/{id}',['uses'=>'LichChieuPhimController@getfilm_first_id']);



Route::get('getimgtrailerfirst',['uses'=>'ImgTrailerController@get_imgtrailer_first']);

Route::get('count_comment/{id}',['uses'=>'CommentController@count_comment']);

Route::get('getsuatchieu/{MaPhim}/{MaRap}',['uses'=>'LichChieuPhimController@get_suatchieu']);

Route::get('getsuatchieu_id/{id}',['uses'=>'SuatChieuController@getsuatchieu_id']);

Route::get('create_lichchieu/{MaPhim}/{NgayChieu}/{MaRap}/{MaSC}',['uses'=>'LichChieuPhimController@create_lichchieu']);

Route::get('get_ngaychieu_suatchieu/{date}/{date_2}',['uses'=>'LichChieuPhimController@get_ngaychieu_suatchieu']);


Route::get('getlistcomment/{MaPhim}',['uses'=>'CommentController@get_list_comment']);

Route::get('create_comment/{MaPhim}/{MaKH}/{NoiDung}',['uses'=>'CommentController@create_comment']);

Route::get('getuser/{ID}',['uses'=>'nguoidungController@getUser']);

Route::get('testdangky/{username}',['uses'=>'nguoidungController@testdangky']);

Route::get('create_user/{username}/{password}/{maut}',['uses'=>'nguoidungController@create_user']);

Route::get('getuserfirst/{username}/{password}',['uses'=>'nguoidungController@getuserfirst']);

Route::get('getkhachhangfirst/{ID}',['uses'=>'KhachHangController@get_khach_hang']);

Route::get('getlistkhachhang',['uses'=>'KhachHangController@getlistkhachhang']);

Route::get('xoa_khachhang/{id}',['uses'=>'KhachHangController@xoa_khachhang']);

Route::get('update_khachhang/{id}/{hoten}/{gioitinh}/{ngaysinh}/{email}/{sodienthoai}/{cmnd}/{anh}/{diachi}',['uses'=>'KhachHangController@update_khachhang']);

Route::get('create_khachhang/{id}',['uses'=>'KhachHangController@create_khachhang']);

Route::get('xoa_nhanvien/{id}',['uses'=>'NhanVienController@xoa_nhanvien']);

Route::get('getlistnhanvien',['uses'=>'NhanVienController@getlistnhanvien']);

Route::get('get_nhanvien/{id}',['uses'=>'NhanVienController@get_nhanvien']);

Route::get('get_lichsuwork/{id}',['uses'=>'NhanVienController@get_lichsuwork']);



Route::get('create_nhanvien/{ID}/{TenNV}/{GioiTinh}/{CMND}/{DiaChi}/{SDT}/{NgaySinh}/{NgayBD}/{Anh}',['uses'=>'NhanVienController@create_nhanvien']);



//api trang book ve 1


//api trang book ve 2
Route::get('listve/{maphim}/{ngayxem}/{suatchieu}',['uses'=>'VeController@listve']);

Route::get('listve_khachhang/{id}',['uses'=>'VeController@listve_khachhang']);

Route::get('listve_nhanvien/{id}',['uses'=>'VeController@listve_nhanvien']);

Route::get('get_vefirst/{id}',['uses'=>'VeController@get_vefirst']);

Route::get('ve_first/{mp}/{NgayXem}/{SuatChieu}/{marap}/{maghe}',['uses'=>'VeController@ve_first']);






Route::get('getmachieu/{gioichieu}',['uses'=>'SuatChieuController@get_masc']);

//api trang book ve 3
Route::get('getghe/{maghe}',['uses'=>'GheController@get_ghe']);

Route::get('create_ve/{MaRap}/{MaSC}/{MaGhe}/{MaKH}/{MaPhim}/{NgayXem}/{NgayMua}/{GiaVe}',['uses'=>'VeController@create_ve']);
//api khách hàng
Route::get('getlichchieu',['uses'=>'LichChieuPhimController@listchieuphim']);

Route::get('getlichchieu_1',['uses'=>'LichChieuPhimController@listchieuphim_1']);

//api tìm kiếm
Route::get('listtimkiem/{search_text}/{by_search}',['uses'=>'PhimController@search_film']);

//api

Route::get('maphim',['uses'=>'ApiController@api_maphim']);
Route::get('user',['uses'=>'ApiController@api_user']);
Route::get('search',['uses'=>'ApiController@api_search']);
Route::get('apive',['uses'=>'ApiController@api_ve']);


Route::get('luumaphim/{id}',['uses'=>'ApiController@luu_MaPhim']);
Route::post('luuuser/{id}',['uses'=>'ApiController@luu_User']);

Route::get('luu_User_1/{id}',['uses'=>'ApiController@luu_User_1']);
Route::get('luumaghe/{maghe}',['uses'=>'ApiController@luu_api_ve_maghe']);
Route::get('luumaphim/{maphim}',['uses'=>'ApiController@luu_api_ve_maphim']);
Route::get('luumasc_rap/{masc}/{marap}',['uses'=>'ApiController@luu_api_ve_masc_rap']);
Route::get('luungayxem/{ngayxem}',['uses'=>'ApiController@luu_api_ve_ngayxem']);
Route::get('luutimkiem/{noidung}/{by_search}',['uses'=>'ApiController@luu_timkiem']);

Route::get('luu_Userkhach/{id}',['uses'=>'ApiController@luu_Userkhach']);


//thống kê

Route::get('thongke_doanhthu_nguoixem/{by}/{next}/{loai}',['uses'=>'ThongKeController@thongke_doanhthu_nguoixem']);
Route::get('thongke_thanhvienmoi/{by}/{next}',['uses'=>'ThongKeController@thongke_thanhvienmoi']);
Route::get('thongke_phimmoi/{by}/{next}',['uses'=>'ThongKeController@thongke_phimmoi']);
Route::get('thongke_doanhthu_nguoixem_version_2',['uses'=>'ThongKeController@thongke_doanhthu_nguoixem_version_2']);

Route::get('thongke_doanhthu_theophim/{id}',['uses'=>'ThongKeController@thongke_doanhthu_theophim']);

Route::get('thongke_doanhthu_theokhach/{id}',['uses'=>'ThongKeController@thongke_doanhthu_theokhach']);

Route::get('thongke_doanhthu_nhanvien/{id}',['uses'=>'ThongKeController@thongke_doanhthu_nhanvien']);

Route::get('thongke_veban_nhanvien/{id}',['uses'=>'ThongKeController@thongke_veban_nhanvien']);



// admin

Route::get('get_theloai',['uses'=>'TheLoaiPhimController@get_theloai']);

Route::get('get_tentheloai/{id}',['uses'=>'TheLoaiPhimController@get_tentheloai']);

Route::get('update_theloai/{id}/{tentheloai}',['uses'=>'TheLoaiPhimController@update_theloai']);

Route::get('create_theloai/{tentheloai}',['uses'=>'TheLoaiPhimController@create_theloai']);

Route::get('xoa_theloai/{id}',['uses'=>'TheLoaiPhimController@xoa_theloai']);


Route::get('get_nhacungcap',['uses'=>'NhaCungCapController@get_nhacungcap']);

Route::get('get_nhacungcap_first/{id}',['uses'=>'NhaCungCapController@get_nhacungcap_first']);

Route::get('update_nhacungcap/{id}/{tennhacungcap}/{diachi}/{sdt}',['uses'=>'NhaCungCapController@update_nhacungcap']);

Route::get('create_nhacungcap/{tennhacungcap}/{diachi}/{sdt}',['uses'=>'NhaCungCapController@create_nhacungcap']);

Route::get('xoa_nhacungcap/{id}',['uses'=>'NhaCungCapController@xoa_nhacungcap']);



Route::get('insert_phim/{tenphim}/{daodien}/{quocgia}/{namsanxuat}/{thoiluong}/{ngonngu}/{noidung}/{theloai}/{nhacungcap}/{tuoigioihan}/{anhhienthi}/{trailer}',['uses'=>'PhimController@insert_phim']);

Route::get('edit_phim/{tenphim}/{daodien}/{quocgia}/{namsanxuat}/{thoiluong}/{ngonngu}/{noidung}/{theloai}/{nhacungcap}/{tuoigioihan}',['uses'=>'PhimController@update_phim']);













