<?php

namespace Database\Seeders;

use Botble\Blog\Enums\PostStatusEnum;
use Botble\Blog\Models\Post;
use Botble\Base\Supports\BaseSeeder;

class PostSeeder extends BaseSeeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
               Post::chunk(100, function ($posts) {
            foreach ($posts as $post) {
                if ($post->status == 'published') {
                    $post->update(['status' => PostStatusEnum::ACTIVE]);
                }
                else{
                    $post->update(['status' => PostStatusEnum::INACTIVE]);
                }
            }
          });
    }
}
