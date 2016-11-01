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
        $password = Hash::make('0258456.Bloasu');
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'graham@directonlijn.nl',
            'password' => $password
        ]);
    }
}
