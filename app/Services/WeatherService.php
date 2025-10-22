<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected string $apiKey;

    protected string $baseUrl = 'https://api.openweathermap.org/data/2.5/weather';

    public function __construct()
    {
        $this->apiKey = config('services.openweather.api_key');
    }

    public function getWeather(): array
    {
        $cacheKey = 'weather_kuncice';

        return Cache::remember($cacheKey, now()->addHour(), function () {
            $response = Http::get($this->baseUrl, [
                'lat' => 50.18779,
                'lon' => 16.93927,
                'appid' => $this->apiKey,
                'units' => 'metric',
                'lang' => 'cz',
            ]);

            if ($response->successful()) {
                return $response->json();
            }

            throw new \Exception('Unable to fetch weather data: '.$response->body());
        });
    }
}
