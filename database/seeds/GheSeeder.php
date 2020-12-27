<?php

use Illuminate\Database\Seeder;

class GheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ghe')->insert(
            [
                [
                    'MaGhe' => 1,
                    'MaLoaiGhe'=>1,
                    'MaRap' => 1,
                    'created_at' =>new DateTime()
                ],
                [
                    'MaGhe' => 2,
                    'MaLoaiGhe'=>2,
                    'MaRap' => 1,
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
