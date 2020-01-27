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
                'team1' => 'ยังไม่มีข้อมูล',
                'team2' => 'ยังไม่มีข้อมูล',
                'team3' => 'ยังไม่มีข้อมูล',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
