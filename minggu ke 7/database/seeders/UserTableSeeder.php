<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memasuukan data user
        User::insert([
            'name' => 'rizki',
            'email' => 'rizkicahyo@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}