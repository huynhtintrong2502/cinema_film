<?php

use Illuminate\Database\Seeder;

class SlidePanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliepanel')->insert(
            [
                [
                    'ID' => 1,
                    'Anh'=>'template/images/slides/first-slide.jpg',
                    'created_at' =>new DateTime()
                ],
                [
                    'ID' => 2,
                    'Anh'=>'template/images/bg-video.jpg',
                    'created_at' =>new DateTime()
                ],
                [
                    'ID' => 3,
                    'Anh'=>'images/slides/next-slide.jpg',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
