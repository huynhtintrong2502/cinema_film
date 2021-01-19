<?php

use Illuminate\Database\Seeder;

class Api_MaPhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_maphim')->insert(
            [
                [
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
