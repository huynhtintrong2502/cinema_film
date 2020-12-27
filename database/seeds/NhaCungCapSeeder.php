<?php

use Illuminate\Database\Seeder;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('nhacungcap')->insert(
                [
                    [
                        'DiaChi'=>'Quy Nhơn - Bình Định',
                        'MaNCC' => 1,
                        'SDT'=>'0344242296',
                        'TenNCC'=>'Disney',
                        
                        
                        'created_at' =>new DateTime()
                    ],
                    [
                        'DiaChi'=>'Quy Nhơn - Bình Định',
                        'MaNCC' => 2,
                        'SDT'=>'0344242296',
                        'TenNCC'=>'Disney',
                        'created_at' =>new DateTime()
                    ]
                ]
            );
    }
}
