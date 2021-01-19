<?php

use Illuminate\Database\Seeder;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert(
            [
                [
                    
                    'ID' => 1,
                    'TenNV'=>'Huỳnh Tín Trọng',
                    'CMND'=>'12345676789',
                    'DiaChi'=>'120-Trần Hưng Đạo-Quy Nhơn-Bình Định',
                    'SDT'=>'0344242296',
                    'NgaySinh'=>"2000-10-28",
                    'NgayBD'=>new DateTime(),
                    'Anh'=>'',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
