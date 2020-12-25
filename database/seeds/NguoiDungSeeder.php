<?php

use Illuminate\Database\Seeder;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoidung')->insert(
            [
                [
                    'ID' => 1,
                    'MaUT'=>'Admin',
                    'UserName' => 1,
                    'PassWord'=>'Admin',
                    'created_at' =>new DateTime()
                ],
                [
                    'ID' => 2,
                    'MaUT' => 2,
                    'TenUT'=>'Người dùng',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
