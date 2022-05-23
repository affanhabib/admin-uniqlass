<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'uniqlass',
            'email' => 'adm.uniqlass@gmail.com',
            'password' => Hash::make('uniqlass2021'),
            'role' => 'superadmin',
        ]);
    }
}
