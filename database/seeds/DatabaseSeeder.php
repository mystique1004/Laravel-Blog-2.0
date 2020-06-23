<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        // DB::table('posts')->insert([
        //     'id' => int_random(),
        //     'title' => 'required|min:5|max:255',
        //     'slug' => 'required|alpha_dash|:5|max:255|unique:posts,slug',
        //     'body' => 'required|min:20',
        //     timestamp(),
        // ]);
        factory(App\Post::class, 50)->create();
    }
}
