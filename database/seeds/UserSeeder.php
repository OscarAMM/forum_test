<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('welcometocodeworld')
        ])->assignRole('Administrator');
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password'=> bcrypt('welcometocodeworld')
        ])->assignRole('User');
    }
}
