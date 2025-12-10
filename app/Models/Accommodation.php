<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Filamerce\FilamentTranslatable\Traits\AstrotomicTranslatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Accommodation extends Model implements HasMedia, TranslatableContract
{
    use AstrotomicTranslatable;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'content',
        'address',
        'email',
        'phone',
        'phone2',
        'website',
        'is_available',
    ];

    protected $with = ['translations'];

    public $translatedAttributes = [
        'name',
        'content',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->useFallbackUrl('https://picsum.photos/600/600')
            ->singleFile();
    }

    public function casts(): array
    {
        return [
            'is_available' => 'boolean',
        ];
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }
}
