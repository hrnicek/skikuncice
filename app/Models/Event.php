<?php

namespace App\Models;

use App\Traits\HasSeason;
use Spatie\Sluggable\HasSlug;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use HasSeason;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'perex',
        'date_from',
        'date_to',
        'published',
        'content',
        'show_time',    
        'program',
        'note',
    ];

    protected $casts = [
        'date_from' => 'datetime',
        'date_to' => 'datetime',
        'published' => 'boolean',
        'program' => 'array',
        'show_time' => 'boolean',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

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
    
    public function scopePublished($query): Builder
    {
        return $query->where('published', true);
    }

    public function scopeNotPublished($query): Builder
    {
        return $query->where('published', false);
    }

    public function scopeUpcoming($query): Builder
    {
        return $query->where('date_from', '>', now());
    }

    public function scopePast($query): Builder
    {
        return $query->where('date_to', '<', now());
    }

    public function scopeCurrent($query): Builder
    {
        return $query->where('date_from', '<=', now())->where('date_to', '>=', now());
    }

    public function scopeNearnest($query): Builder
    {
        return $query->where('date_from', '>', now())->orderBy('date_from');
    }
}
