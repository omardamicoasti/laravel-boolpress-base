<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $posts = [
            [
                "user" => "Tsvetan Gerginov",
                "body" => "Today I woke up early to study PHP, but tomorrow I'll go skate.",
                "picture" => "https://pbs.twimg.com/profile_images/914894066072113152/pWD-GUwG_400x400.jpg",
                "created_at" => "2021-06-05 07:56:06",
            ],
            [
                "user" => "Omar D'Amico",
                "body" => "Today I'm studying Laravel, , it's quite interesting. I'll rest at the weekend.",
                "picture" => "https://pbs.twimg.com/profile_images/914894066072113152/pWD-GUwG_400x400.jpg",
                "created_at" => "2021-05-22 07:56:06",
            ],
            [
                "user" => "Paolo Dossetto",
                "body" => "Today I'm studying React Native. It's really really useful!!!",
                "picture" => "https://pbs.twimg.com/profile_images/914894066072113152/pWD-GUwG_400x400.jpg",
                "created_at" => "2021-07-01 07:56:06",
            ],
            [
                "user" => "Yumi Shikata",
                "body" => "I deleted all important file from my Mac, can you help me?",
                "picture" => "https://pbs.twimg.com/profile_images/914894066072113152/pWD-GUwG_400x400.jpg",
                "created_at" => "2020-07-03 10:56:06",
            ],
            
        ];
        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->user = $post['user'];
            $newPost->body = $post['body'];
            $newPost->picture = $post['picture'];
            $newPost->created_at = $post['created_at'];
            $newPost->save();
        }
    }
}
