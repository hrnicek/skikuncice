<?php

namespace Tests\Feature;

use App\Services\MeteoblueService;
use App\Data\WeatherForecastData;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class MeteoblueServiceTest extends TestCase
{
    public function test_it_fetches_and_returns_weather_data()
    {
        Http::fake([
            'my.meteoblue.com/*' => Http::response([
                'data_1h' => [
                    'temperature' => [22.5],
                    'windspeed' => [5.5],
                    'pictocode' => [1],
                ],
                'data_day' => [
                    'time' => ['2023-01-01', '2023-01-02', '2023-01-03', '2023-01-04', '2023-01-05', '2023-01-06', '2023-01-07'],
                    'temperature_min' => [15.0, 14.0, 13.0, 12.0, 11.0, 10.0, 9.0],
                    'temperature_max' => [25.0, 24.0, 23.0, 22.0, 21.0, 20.0, 19.0],
                    'precipitation_probability' => [0, 10, 20, 30, 40, 50, 60],
                    'pictocode' => [1, 2, 3, 4, 5, 6, 7],
                ],
            ], 200),
        ]);

        $service = app(MeteoblueService::class);
        $result = $service->getForecast();

        $this->assertInstanceOf(WeatherForecastData::class, $result);
        $this->assertEquals(22.5, $result->temperature);
        $this->assertEquals(7, $result->daily->count());
        $this->assertEquals('2023-01-01', $result->daily[0]->date);
        $this->assertEquals(25.0, $result->daily[0]->max_temperature);
    }

    public function test_it_caches_the_response()
    {
        Http::fake([
            'my.meteoblue.com/*' => Http::response([
                'data_1h' => [
                    'temperature' => [22.5],
                    'windspeed' => [5.5],
                    'pictocode' => [1],
                ],
                'data_day' => [
                    'temperature_min' => [15.0],
                    'temperature_max' => [25.0],
                ],
            ], 200),
        ]);

        $service = app(MeteoblueService::class);
        
        // First call - should hit API
        $service->getForecast();
        
        // Second call - should hit cache
        $service->getForecast();

        Http::assertSentCount(1);
    }

    public function test_it_handles_api_failure_gracefully()
    {
        Http::fake([
            'my.meteoblue.com/*' => Http::response([], 500),
        ]);

        $service = app(MeteoblueService::class);
        $result = $service->getForecast();

        $this->assertNull($result);
    }
}
