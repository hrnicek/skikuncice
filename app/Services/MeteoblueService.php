<?php

namespace App\Services;

use App\Data\WeatherForecastData;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MeteoblueService
{
    protected string $apiKey;
    protected string $baseUrl;
    protected int $cacheTtl;

    public function __construct()
    {
        $this->apiKey = config('meteoblue.api_key', '');
        $this->baseUrl = config('meteoblue.base_url', 'https://my.meteoblue.com/packages/basic-1h_basic-day');
        $this->cacheTtl = request()->hasMacro('withoutCache') ? 0 : (int) config('meteoblue.cache_ttl', 0);
    }

    public function getForecast(float $lat = 50.18779, float $lon = 16.93927): ?WeatherForecastData
    {
        $cacheKey = "meteoblue_forecast_{$lat}_{$lon}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () use ($lat, $lon) {
            try {
                $response = Http::get($this->baseUrl, [
                    'apikey' => $this->apiKey,
                    'lat' => $lat,
                    'lon' => $lon,
                    'asl' => 650, // Altitude example, maybe optional or parameter
                    'format' => 'json',
                    'windspeed' => 'kmh',
                ]);

                if ($response->failed()) {
                    Log::error('Meteoblue API Error', [
                        'status' => $response->status(),
                        'body' => $response->body(),
                    ]);
                    return null;
                }

                $data = $response->json();

                return WeatherForecastData::fromMeteoblueResponse($data);
            } catch (\Exception $e) {
                Log::error('Meteoblue Service Exception', ['message' => $e->getMessage()]);
                return null;
            }
        });
    }
}
