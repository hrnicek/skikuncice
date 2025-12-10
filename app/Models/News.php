<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Filamerce\FilamentTranslatable\Traits\AstrotomicTranslatable;
use Illuminate\Database\Eloquent\Builder;

class News extends Model implements TranslatableContract
{
    use AstrotomicTranslatable;

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

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
          
    }
}
