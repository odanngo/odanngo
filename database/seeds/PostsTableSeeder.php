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
        // DB::table('posts')->insert([
        //     'title' => 'ああああ',
        //     'body' => 'いいいいい',
        //     'category_id' => 1,
        // ]);
        //  DB::table('posts')->insert([
        //     'title' => 'うううう',
        //     'body' => 'ええええ',
        //     'category_id' => 1,
        // ]);
        factory(App\Post::class, 3)->create();
    }
}
