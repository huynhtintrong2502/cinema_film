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
                    'MaUT'=>1,
                    'UserName' => 'admin',
                    'PassWord'=>'admin',
                    'created_at' =>new DateTime()
                ],
                [
                    'ID' => 2,
                    'MaUT'=>2,
                    'UserName' => 'huyntintrong',
                    'PassWord'=>'huyntintrong',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
