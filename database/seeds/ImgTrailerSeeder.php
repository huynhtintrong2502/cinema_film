<?php

use Illuminate\Database\Seeder;

class ImgTrailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imgtrailer')->insert(
            [
                [
                    'MaPhim' => 1,
                    'Anh1'=>'anh1.jpg',
                    'Anh2'=>'anh2.jpg',
                    'Anh3'=>'anh3.jpg',
                    'Anh4'=>'anh4.jpg',
                    'Anh5'=>'anh5.jpg',
                    'Anh6'=>'anh6.jpg',
                    'Anh7'=>'anh7.jpg',
                    'Anh8'=>'anh8.jpg',
                    'Anh9'=>'anh9.jpg',
                    'Anh10'=>'anh10.jpg',
                    'created_at' =>new DateTime()
                ],
                [
                    'MaPhim' => 5,
                    'Anh1'=>'anh1.jpg',
                    'Anh2'=>'anh2.jpg',
                    'Anh3'=>'anh3.jpg',
                    'Anh4'=>'anh4.jpg',
                    'Anh5'=>'anh5.jpg',
                    'Anh6'=>'anh6.jpg',
                    'Anh7'=>'anh7.jpg',
                    'Anh8'=>'anh8.jpg',
                    'Anh9'=>'anh9.jpg',
                    'Anh10'=>'anh10.jpg',
                    'created_at' =>new DateTime()
                ],
                [
                    'MaPhim' => 5,
                    'Anh1'=>'anh1.jpg',
                    'Anh2'=>'anh2.jpg',
                    'Anh3'=>'anh3.jpg',
                    'Anh4'=>'anh4.jpg',
                    'Anh5'=>'anh5.jpg',
                    'Anh6'=>'anh6.jpg',
                    'Anh7'=>'anh7.jpg',
                    'Anh8'=>'anh8.jpg',
                    'Anh9'=>'anh9.jpg',
                    'Anh10'=>'anh10.jpg',
                    'created_at' =>new DateTime()
                ],
                [
                    'MaPhim' => 5,
                    'Anh1'=>'anh1.jpg',
                    'Anh2'=>'anh2.jpg',
                    'Anh3'=>'anh3.jpg',
                    'Anh4'=>'anh4.jpg',
                    'Anh5'=>'anh5.jpg',
                    'Anh6'=>'anh6.jpg',
                    'Anh7'=>'anh7.jpg',
                    'Anh8'=>'anh8.jpg',
                    'Anh9'=>'anh9.jpg',
                    'Anh10'=>'anh10.jpg',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
