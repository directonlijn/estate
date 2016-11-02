<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password1234!');
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'graham@directonlijn.nl',
            'password' => $password
        ]);
    }
}
