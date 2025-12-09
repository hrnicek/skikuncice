<?php

namespace App\Services;

use App\Data\CurrentWeatherData;
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

    public function currentWeather(float $lat = 50.190, float $lon = 16.942): ?CurrentWeatherData
    {
        $cacheKey = "meteoblue_current_weather_{$lat}_{$lon}";

        $payload = Cache::remember($cacheKey, $this->cacheTtl, function () use ($lat, $lon) {
            $params = [
                'apikey' => $this->apiKey,
                'lat' => $lat,
                'lon' => $lon,
                'asl' => 650,
                'format' => 'json',
                'windspeed' => 'kmh',
            ];
            $json = $this->requestPackage('current', $params);
            if (is_array($json)) {
                Log::channel('weather')->info('current', [
                    'lat' => $lat,
                    'lon' => $lon,
                    'response' => $json,
                ]);
            }

            return $json;
        });

        if (is_array($payload)) {
            return CurrentWeatherData::fromApi($payload);
        }

        return $payload;
    }

    private function requestPackage(string $package, array $params): ?array
    {
        $client = Http::baseUrl('https://my.meteoblue.com')
            ->acceptJson()
            ->retry(2, 200)
            ->timeout(10);

        $response = $client->get('packages/'.$package, $params);

        if ($response->failed()) {
            Log::error('Meteoblue API Error', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        }

        return $response->json();
    }
}
