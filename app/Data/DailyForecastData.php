<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class DailyForecastData extends Data
{
    public function __construct(
        public string $date,
        public float $max_temperature,
        public float $min_temperature,
        public int $precipitation_probability,
        public int $weather_code,
    ) {}
}
