<?php

namespace App\Data;

use App\Models\Post;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public string $content,
        public Carbon $published_at,
    ) {}

    public static function fromModel(Post $post): self
    {
        return new self(
            id: $post->id,
            title: $post->title,
            content: $post->content,
            published_at: $post->published_at,
        );
    }
}
