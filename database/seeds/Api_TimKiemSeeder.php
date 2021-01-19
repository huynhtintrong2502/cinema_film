<?php

use Illuminate\Database\Seeder;

class Api_TimKiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_timkiem')->insert(
            [
                [
                    'search_text'=>'Hành động',
                    'by_search'=>3,
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
