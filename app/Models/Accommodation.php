<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Accommodation extends Model implements HasMedia
{
    use InteractsWithMedia;

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
