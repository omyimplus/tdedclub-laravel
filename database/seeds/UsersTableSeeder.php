<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Admin Admin',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'level' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 1',
            'email' => 'z1@z1.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z1@z1.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 2',
            'email' => 'z2@z2.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z2@z2.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 3',
            'email' => 'z3@z3.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z3@z3.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 4',
            'email' => 'z4@z4.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z4@z4.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 5',
            'email' => 'z5@z5.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z5@z5.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 6',
            'email' => 'z6@z6.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z6@z6.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 7',
            'email' => 'z7@z7.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z7@z7.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'name' => 'เซียน 8',
            'email' => 'z8@z8.com',
            'email_verified_at' => now(),
            'password' => bcrypt('z8@z8.com'),
            'level' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);        
    }
}
