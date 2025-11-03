<?php

namespace App\Data;

use App\Models\Accommodation;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;

class AccommodationData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public ?string $description,
        public Lazy|string|null $image_url,
    ) {}

    public static function fromModel(Accommodation $accommodation): self
    {
        return new self(
            id: $accommodation->id,
            name: $accommodation->name,
            description: $accommodation->description,
            image_url: Lazy::whenLoaded('media', $accommodation, fn () => $accommodation->getFirstMediaUrl('image')),
        );
    }
}
