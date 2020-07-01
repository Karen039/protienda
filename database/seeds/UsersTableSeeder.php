<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Juan',
            'email' =>'juan@outlook.com',
            'email_verified_at' =>'2017-02-12',
            'password' => bcrypt('12345678'),
            'admin' => true
        ]);
    }
}
