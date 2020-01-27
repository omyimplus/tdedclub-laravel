<?php

use Illuminate\Database\Seeder;

class TstepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 9; $i++) { 
            \App\Tstep::insert([
                'uid' => ceil($i+1),
                'team1' => 'AZ อัลค์ม่าร์ 2 รอง 0.25 (HOL D2 02:00)',
                'team2' => 'พีเอสวี ไอนด์โฮเฟ่น(เยาวชน) รอง 0.25 (HOL D2 02:00)',
                'team3' => 'ทรัวส์ รอง 0.25 (FRA D2 02:45)',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
