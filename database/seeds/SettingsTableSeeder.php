<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['name' => 'site-title', 'value' => 'MBBL Real Estate'],
            ['name' => 'base-href', 'value' => 'http://estate.dev'],
            ['name' => 'css-folder', 'value' => '/css/'],
            ['name' => 'img-folder', 'value' => '/img/'],
            ['name' => 'script-folder', 'value' => '/js/'],
            ['name' => 'logo-url', 'value' => 'logo_mbbl.png'],
            ['name' => 'background', 'value' => 'bg.jpg']

        ];

        DB::table('settings')->insert($settings);
    }
}
