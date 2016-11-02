<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'id' => '1',
            'parent_id' => '0',
            'type' => 'huur',
            'property_type' => 'appartement',
            'price' => '1200',
            'short_description' => 'korte beschrijving',
            'long_description' => 'lange beschrijving',
            'province' => 'Noord-holland',
            'city' => 'Amsterdam',
            'address' => 'Dam 1',
            'zipcode' => '1000AA',
            'longitude' => '5.0595031',
            'latitude' => '51.7993048',
            'outside_size' => '0',
            'inside_size' => '200',
            'sold' => '0',
            'spotlight' => '0',
            'owner_id' => '1',
            'document_id' => '0',
            'photo_album_id' => '0',
            'makelaar_id' => '0',
        ]);
    }
}
