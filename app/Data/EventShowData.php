<?php

namespace App\Data;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;

class EventShowData extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public ?string $slug,
        public ?string $perex,
        public Carbon $date_from,
        public Carbon $date_to,
        public bool $published,
        public ?string $content,
        public ?string $note,
        public Lazy|string|null $image_url,
    ) {}

    public static function fromModel(Event $event): self
    {
        return new self(
            id: $event->id,
            title: $event->title,
            slug: $event->slug,
            perex: $event->perex,
            date_from: $event->date_from,
            date_to: $event->date_to,
            published: $event->published,
            content: $event->content,
            note: $event->note,
            image_url: Lazy::whenLoaded('media', $event, fn () => $event->getFirstMediaUrl('image')),
        );
    }
}
