<?php

namespace Database\Seeders;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Blog\Enums\PostStatusEnum;
use Botble\Blog\Models\Post;
use Illuminate\Database\Seeder;

class UpdateStatusInTablePosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::whereIn('status', [BaseStatusEnum::DRAFT, BaseStatusEnum::PENDING])->chunk(100, function ($posts) {
            foreach($posts as $post) {
                $post->status = PostStatusEnum::INACTIVE;
                $post->save();
            }
        });

        Post::where('status', BaseStatusEnum::PUBLISHED)->chunk(100, function ($posts) {
            foreach($posts as $post) {
                $post->status = PostStatusEnum::ACTIVE;
                $post->save();
            }
        });
    }
}
