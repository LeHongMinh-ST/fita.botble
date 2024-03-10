<?php

namespace Database\Seeders;

use Botble\Blog\Models\Post;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Enums\PostBaseStatusEnum;

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
                    $post->update(['status' => PostBaseStatusEnum::ACTIVE]);
                }
                else{
                    $post->update(['status' => PostBaseStatusEnum::INACTIVE]);
                }
            }
          });
    }
}
