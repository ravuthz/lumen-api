<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create(array(
            'name' => 'Vannaravuth Yo',
            'email' => 'yovannaravuth@gmail.com',
            'password' => encrypt('123123'),
            'api_token' => 'i12bApR0D3v0Lp3R'
        ));
    }
}