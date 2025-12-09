<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class RestaurantMenu extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'type',
        'from_date',
        'to_date',
        'fixed_menu',
        'is_published',
        'note',
    ];

    protected $casts = [
        'fixed_menu' => 'boolean',
        'is_published' => 'boolean',
    ];

    public function scopeThisWeek($query)
    {
        $today = now()->startOfDay();
        $endOfWeek = now()->endOfWeek();

        return $query->where('from_date', '<=', $endOfWeek)
            ->where('to_date', '>=', $today);
    }

    public function scopeNextWeek($query)
    {
        $startOfNextWeek = now()->addWeek()->startOfWeek();
        $endOfNextWeek = now()->addWeek()->endOfWeek();

        return $query->where('from_date', '<=', $endOfNextWeek)
            ->where('to_date', '>=', $startOfNextWeek);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }

    public function scopeLatestMenu($query)
    {
        return $query->orderBy('from_date', 'desc');
    }
}
