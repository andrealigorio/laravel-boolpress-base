<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $new_post = new Post();
            $new_post->author = $faker->firstName();
            $new_post->title = $faker->sentence(3);
            $new_post->content = $faker->paragraph();
            $new_post->save();
        }
    }
}
