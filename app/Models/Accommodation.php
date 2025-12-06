<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Accommodation extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, InteractsWithMedia, HasSlug;

    protected $fillalbe = [
        'name',
        'address',
        'email',
        'phone',
        'phone2',
        'website',
        'content',
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
