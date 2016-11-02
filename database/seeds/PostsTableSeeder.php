<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => '1',
            'parent_id' => '0',
            'type' => 'news',
            'title' => 'test nieuws item',
            'content' => 'content test nieuws item',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
