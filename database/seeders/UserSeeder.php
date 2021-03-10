<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => ' 2021-2-24 18:27:26',
        ]);
    }
}
