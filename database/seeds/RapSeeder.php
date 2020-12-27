<?php

use Illuminate\Database\Seeder;

class RapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('rap')->insert(
                [
                    [
                        'MaRap' => 1,
                        'TenRap'=>'Rạp 1',
                        'created_at' =>new DateTime()
                    ],
                    [
                        'MaRap' => 2,
                        'TenRap'=>'Rạp 2',
                        'created_at' =>new DateTime()
                    ]
                ]
            );
    }
}
