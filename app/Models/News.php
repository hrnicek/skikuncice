<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Filamerce\FilamentTranslatable\Traits\AstrotomicTranslatable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements TranslatableContract, HasMedia
{
    use AstrotomicTranslatable;
    use InteractsWithMedia;

    protected $with = ['translations'];

    protected $fillable = [
        'published_at',
        'is_published',
    ];

    public $translatedAttributes = ['title', 'content'];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->useFallbackUrl('https://picsum.photos/800/400')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(100)
              ->height(100)
              ->sharpen(10);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
          
    }
}
