<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Islam',
                'email' => 'islam@gmail.com',
                'password' => bcrypt('123456789'),
            ]);
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
            ]);
        User::create(
            [
                'name' => 'Localhost',
                'email' => 'localhost@gmail.com',
                'password' => bcrypt('123456789'),
            ]);
    }
}
