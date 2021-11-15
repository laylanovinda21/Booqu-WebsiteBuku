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
        $users = [
            [
                'name' => 'Admin Booqu',
                'email' => 'booqu@gmail.com',
                'password' => bcrypt('booqu123'),
            ]
        ];

        User::insert($users);
    }
}
