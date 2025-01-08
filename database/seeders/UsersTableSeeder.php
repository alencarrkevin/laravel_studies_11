<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('abc123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'normal user',
                'email' => 'normal@gmail.com',
                'password' => bcrypt('abc123456'),
                'role' => 'normal_user'
            ],
            [
                'name' => 'visitor',
                'email' => 'visitor@gmail.com',
                'password' => bcrypt('abc123456'),
                'role' => 'visitor'
            ],
        ];

        DB::table('users')->insert($users);
        
    }
}
