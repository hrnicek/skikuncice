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
        'is_published',
        'note',
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
}
