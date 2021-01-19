<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(
            UserTypeSeeder::class,
            NguoiDungSeeder::class,
            CommentSeeder::class,
            GheSeeder::class,
            KhachHangSeeder::class,
            LoaiGheSeeder::class,
            LoaiKhachHangSeeder::class,
            LuongSeeder::class,
            NhaCungCapSeeder::class,
            NhanVienSeeder::class,
            PhimSeeder::class,
            RapSeeder::class,
            SuatChieuSeeder::class,
            TheLoaiSeeder::class,
            VeSeeder::class,
            ImgTrailerSeeder::class,
            LichChieuPhimSeeder::class
        );
    }
}
