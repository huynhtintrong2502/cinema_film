<?php

use Illuminate\Database\Seeder;

class LoaiGheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('loaighe')->insert(
                [
                    [
                        'MaLoaiGhe' => 1,
                        'TenLoaiGhe'=>'Thường',
                        'GiaGhe'=>40,
                        'created_at' =>new DateTime()
                    ],
                    [
                        'MaLoaiGhe' => 2,
                        'TenLoaiGhe'=>'Vip',
                        'GiaGhe'=>50,
                        'created_at' =>new DateTime()
                    ]
                ]
            );
    }
}
