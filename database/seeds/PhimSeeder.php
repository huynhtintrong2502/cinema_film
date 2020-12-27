<?php

use Illuminate\Database\Seeder;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('phim')->insert(
            [
                [
                    'MaPhim' => 1,
                    'MaNCC' => 1,
                    'TenPhim'=>'Diệp Vấn : Bậc Thầy Võ Thuật',
                    'DaoDien'=>'Eshom Nelms, Ian Nelms',
                    'QuocGia'=>'Mỹ',
                    'NamSX'=>2000,
                    'ThoiLuong'=>100,
                    'NgonNgu'=>'Thuyết minh',
                    'NoiDung'=>'Diệp Vấn : Bậc Thầy Võ Thuật - Ip Man: Kung Fu Master là bộ phim võ thuật Trung Quốc được phát hành năm 2019 do Liming Li đồng biên kịch và đạo diễn với sự tham gia của Đỗ Vũ Hàng trong vai Diệp Vấn. Đây là vai diễn võ sĩ thứ ba của Vũ Hàng, sau bộ phim The Legend Is Born : Ip Man (2010) và Kung Fu League (2018). Bộ phim lấy mốc thời gian lúc Diệp Vấn làm cảnh sát ở Quảng Châu trước cuộc cách mạng Cộng sản ở Trung Quốc năm 1949. Lúc này anh là võ sĩ nổi tiếng kèm cặp Lý Tiểu Long, tuy nhiên bị buộc tội giết người - là một tên cướp tàn nhẫn, và bị con gái của hắn là Qingchuan nhắm mục tiêu báo thù. ',
                    'MaTL'=>1,
                    'DanhGia' => 7,
                    'AgeDuocXem' => 16,
                    'NgayMua' => '2015-10-28',
                    'AnhHienThi'=>'',
                    'trailer'=>'',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
