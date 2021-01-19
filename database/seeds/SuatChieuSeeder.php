<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SuatChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date=new DateTime('08:00');
        $date1=new DateTime('10:00');
        $date3=new DateTime('10:05');
        $date4=new DateTime('12:05');
            DB::table('suatchieu')->insert(
                [
                    [
                        'MaSC' => 1,
                        'TGBatDau'=>date_format($date, 'H:i'),
                        'TGKetThuc'=>date_format($date1, 'H:i'),
                        'created_at' =>new DateTime()
                    ],
                    [
                        'MaSC' => 2,
                        'TGBatDau'=>date_format($date3, 'H:i'),
                        'TGKetThuc'=>date_format($date4, 'H:i'),
                        'created_at' =>new DateTime()
                    ]
                ]
            );
    }
}
