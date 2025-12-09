<?php

namespace App\Data;

use App\Models\RestaurantMenu;
use Spatie\LaravelData\Data;

class RestaurantMenuData extends Data
{
    public function __construct(
        public int $id,
        public string $type,
        public string $from_date,
        public string $to_date,
        public bool $is_published,
        public ?string $note,
        public ?string $download_url,
    ) {}

    public static function fromModel(RestaurantMenu $menu): self
    {
        $downloadUrl = null;
        
        // Get the first media file from the 'files' collection
        $media = $menu->getFirstMedia('files');
        if ($media) {
            $downloadUrl = $media->getUrl();
        }

        return new self(
            id: $menu->id,
            type: $menu->type,
            from_date: $menu->from_date,
            to_date: $menu->to_date,
            is_published: $menu->is_published,
            note: $menu->note,
            download_url: $downloadUrl,
        );
    }
}
