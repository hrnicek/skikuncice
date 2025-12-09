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

    public function currentWeather(float $lat = 50.18779, float $lon = 16.93927): ?CurrentWeatherData
    {
        $cacheKey = "meteoblue_current_weather_{$lat}_{$lon}";

        $payload = Cache::remember($cacheKey, $this->cacheTtl, function () use ($lat, $lon) {
            try {
                $base = 'https://my.meteoblue.com/packages/current';
                $params = [
                    'apikey' => $this->apiKey,
                    'lat' => $lat,
                    'lon' => $lon,
                    'asl' => 650,
                    'format' => 'json',
                    'windspeed' => 'kmh',
                ];
                $secret = env('METEOBLUE_SECRET');
                if ($secret) {
                    $query = http_build_query($params);
                    $sig = md5($base.'?'.$query.'&secret='.$secret);
                    $url = $base.'?'.$query.'&sig='.$sig;
                    $response = Http::get($url);
                } else {
                    $response = Http::get($base, $params);
                }

                if ($response->failed()) {
                    Log::error('Meteoblue API Error', [
                        'status' => $response->status(),
                        'body' => $response->body(),
                    ]);

                    return null;
                }

                return $response->json();
            } catch (\Exception $e) {
                Log::error('Meteoblue Service Exception', ['message' => $e->getMessage()]);

                return null;
            }
        });

        if (is_array($payload)) {
            return CurrentWeatherData::fromApi($payload);
        }

        return $payload;
    }

    public function weekly(float $lat = 50.18779, float $lon = 16.93927): array
    {
        $cacheKey = "meteoblue_weekly_{$lat}_{$lon}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () use ($lat, $lon) {
            try {
                $base = $this->baseUrl;
                $params = [
                    'apikey' => $this->apiKey,
                    'lat' => $lat,
                    'lon' => $lon,
                    'asl' => 650,
                    'format' => 'json',
                    'windspeed' => 'kmh',
                ];
                $secret = env('METEOBLUE_SECRET');
                if ($secret) {
                    $query = http_build_query($params);
                    $sig = md5($base.'?'.$query.'&secret='.$secret);
                    $url = $base.'?'.$query.'&sig='.$sig;
                    $response = Http::get($url);
                } else {
                    $response = Http::get($base, $params);
                }

                if ($response->failed()) {
                    Log::error('Meteoblue API Error', [
                        'status' => $response->status(),
                        'body' => $response->body(),
                    ]);

                    return [];
                }

                $data = $response->json();

                $currentIdx = 0;

                return [
                    'location' => [
                        'lat' => $lat,
                        'lon' => $lon,
                        'asl' => 650,
                    ],
                    'current' => [
                        'time' => $data['data_1h']['time'][$currentIdx] ?? null,
                        'temperature' => $data['data_1h']['temperature'][$currentIdx] ?? null,
                        'humidity' => $data['data_1h']['relativehumidity'][$currentIdx] ?? null,
                        'windspeed_kmh' => $data['data_1h']['windspeed'][$currentIdx] ?? null,
                        'pictocode' => $data['data_1h']['pictocode'][$currentIdx] ?? null,
                    ],
                    'hourly' => [
                        'time' => $data['data_1h']['time'] ?? [],
                        'temperature' => $data['data_1h']['temperature'] ?? [],
                        'windspeed_kmh' => $data['data_1h']['windspeed'] ?? [],
                        'humidity' => $data['data_1h']['relativehumidity'] ?? [],
                        'precipitation' => $data['data_1h']['precipitation'] ?? [],
                    ],
                    'daily' => [
                        'time' => $data['data_day']['time'] ?? [],
                        'temperature_max' => $data['data_day']['temperature_max'] ?? [],
                        'temperature_min' => $data['data_day']['temperature_min'] ?? [],
                        'temperature_mean' => $data['data_day']['temperature_mean'] ?? [],
                        'precipitation_probability' => $data['data_day']['precipitation_probability'] ?? [],
                        'pictocode' => $data['data_day']['pictocode'] ?? [],
                    ],
                ];
            } catch (\Exception $e) {
                Log::error('Meteoblue Service Exception', ['message' => $e->getMessage()]);

                return [];
            }
        });
    }
}
