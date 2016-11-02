<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'id' => '1',
            'name' => 'test owner',
            'email' => 'graham@mbbl.nl',
            'phone' => '0657293328',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
