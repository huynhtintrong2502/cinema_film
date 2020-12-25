<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertype')->insert(
            [
                [
                    'MaUT' => 1,
                    'TenUT'=>'Admin',
                    'created_at' =>new DateTime()
                ],
                [
                    'MaUT' => 2,
                    'TenUT'=>'Người dùng',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
