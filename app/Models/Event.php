<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'published',
        'note',
    ];

    protected $casts = [
        'date_from' => 'datetime',
        'date_to' => 'datetime',
        'published' => 'boolean',
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
            ->useFallbackUrl('https://picsum.photos/600/600')
            ->singleFile();
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

    public function scopeFuture($query): Builder
    {
        return $query->where('date_from', '>=', now());
    }
}
