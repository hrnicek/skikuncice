<?php

namespace App\Data;

use App\Models\News;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class NewsData extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public ?string $content,
        public ?Carbon $published_at,
    ) {}

    public static function fromModel(News $news): self
    {
        return new self(
            id: $news->id,
            title: $news->title,
            content: $news->content,
            published_at: $news->published_at,
        );
    }
}
