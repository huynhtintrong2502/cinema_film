<?php

use Illuminate\Database\Seeder;

class LoaiKhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('loaikhachhang')->insert(
            [
                [
                    'MaLoaiKH' => 1,
                    'TenLoaiKH'=>'Vip 1',
                    'MucUuDai' => 5,
                    'created_at' =>new DateTime()
                ],
                [
                    'MaLoaiKH' => 2,
                    'TenLoaiKH'=>'Vip 2',
                    'MucUuDai' => 10,
                    'created_at' =>new DateTime()
                ],
                [
                    'MaLoaiKH' => 3,
                    'TenLoaiKH'=>'Vip 3',
                    'MucUuDai' => 20,
                    'created_at' =>new DateTime()
                ],
                [
                    'MaLoaiKH' => 4,
                    'TenLoaiKH'=>'Thường',
                    'MucUuDai' => 0,
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
