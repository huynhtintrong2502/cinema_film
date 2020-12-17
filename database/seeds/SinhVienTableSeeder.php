<?php

use Illuminate\Database\Seeder;
class SinhVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sinhvien')->insert(
            [
                [
                    'name' => Str::random(10),
                    'age'=>13,
                    'email' => Str::random(10).'@gmail.com',
                    'phone'=>'083456431',
                    'created_at' =>new DateTime()
                ],
                [
                    'name' => Str::random(10),
                    'age'=>12,
                    'email' => Str::random(10).'@gmail.com',
                    'phone'=>'083456412',
                    'created_at' =>new DateTime()
                ],
                [
                    'name' => Str::random(10),
                    'age'=>14,
                    'email' => Str::random(10).'@gmail.com',
                    'phone'=>'083456456',
                    'created_at' =>new DateTime()
                ],
                [
                    'name' => Str::random(10),
                    'age'=>15,
                    'email' => Str::random(10).'@gmail.com',
                    'phone'=>'083456414',
                    'created_at' =>new DateTime()
                ]
            ]
        );
    }
}
