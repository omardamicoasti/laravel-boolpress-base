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
                "body" => "Today I'm studying PHP",
                "picture" => "https://avatars.githubusercontent.com/u/499550?v=4",
                "created_at" => "2021-06-05 07:56:06",
            ],
            [
                "user" => "Omar D'Amico",
                "body" => "Today I'm studying Laravel",
                "picture" => "https://www.adnkronos.com/resources/0269-124bf984e37d-c47bf03be0be-1000/format/big/bill_gates_afp_rit.jpg",
                "created_at" => "2021-05-22 07:56:06",
            ],
            [
                "user" => "Paolo Dossetto",
                "body" => "Today I'm studying React Native",
                "picture" => "https://production-livingdocs-bluewin-ch.imgix.net/2021/2/12/77ea2eb3-bd7b-49b8-b645-0ee4d56f6ce0.jpeg?w=994&auto=format",
                "created_at" => "2021-07-01 07:56:06",
            ],
            [
                "user" => "Yumi Shikata",
                "body" => "Today I'm studying Vue Js",
                "picture" => "https://staticfanpage.akamaized.net/wp-content/uploads/2020/12/putin-300x225.jpg",
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
