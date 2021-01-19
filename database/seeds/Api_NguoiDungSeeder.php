<?php

use Illuminate\Database\Seeder;

class Api_NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_user')->insert(
            [
                [
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
