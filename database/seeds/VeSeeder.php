<?php

use Illuminate\Database\Seeder;

class VeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table->increments('MaVe',true);//integer('MaVe')->primary();
            $table->string('MaNV');
            $table->foreign('MaNV')->references('MaNV')->on('nhanvien');
            $table->integer('MaSC');
            $table->foreign('MaSC')->references('MaSC')->on('suatchieu');
            $table->integer('MaGhe');
            $table->foreign('MaGhe')->references('MaGhe')->on('ghe');
            $table->integer('MaKH');
            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
            $table->integer('MaPhim');
            $table->foreign('MaPhim')->references('MaPhim')->on('phim');
            $table->date('NgayMua');
            $table->double('GiaVe');
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
