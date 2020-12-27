<?php

use Illuminate\Database\Seeder;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert(
            [
                [
                    'MaKH' => 1,
                    'MaLoaiKH' => 1,
                    'ID'=>2,
                    'TenKH' => 'Huỳnh Tín Trọng',
                    'CMND'=>'123456789',
                    'NgaySinh' => new DateTime(),
                    'DiaChi'=>'120-Trần Hưng Đạo,Quy Nhơn',
                    'SDT' =>'0344242296',
                    'Anh'=>'',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
