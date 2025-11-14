<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasSeason
{
    public function getSeason()
    {
        return $this->season;
    }

    public function scopeSeason($query): Builder
    {
        return $query->where('season', '=', getCurrentSeason());
    }
}
