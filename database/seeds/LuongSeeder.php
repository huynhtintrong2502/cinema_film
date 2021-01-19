<?php

use Illuminate\Database\Seeder;

class LuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table->increments('MaLuong',true);//integer('MaLuong')->primary();
            $table->string('MaNV');
            $table->double('Luong');
        DB::table('theloai')->insert(
            [
                [
                    'MaTL' => 1,
                    'TenTheLoai'=>'Hành động',
                    'created_at' =>new DateTime()
                ],
                [
                    'MaTL' => 2,
                    'TenTheLoai'=>'Hài',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
