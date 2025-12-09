<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class WeatherForecastData extends Data
{

    public function __construct(
        public float $temperature,
        public float $min_temperature,
        public float $max_temperature,
        public int $humidity,
        public float $wind_speed,
        public int $weather_code,
        public string $weather_description,
        /** @var \Spatie\LaravelData\DataCollection<\App\Data\DailyForecastData> */
        public \Spatie\LaravelData\DataCollection $daily,
    ) {}

    /**
     * Map from Meteoblue API response structure.
     */
    public static function fromMeteoblueResponse(array $data): self
    {
        $currentIdx = 0;
        
        $dailyData = [];
        if (isset($data['data_day']['time'])) {
            foreach ($data['data_day']['time'] as $index => $date) {
                $dailyData[] = new DailyForecastData(
                    date: $date,
                    max_temperature: $data['data_day']['temperature_max'][$index] ?? 0.0,
                    min_temperature: $data['data_day']['temperature_min'][$index] ?? 0.0,
                    precipitation_probability: $data['data_day']['precipitation_probability'][$index] ?? 0,
                    weather_code: $data['data_day']['pictocode'][$index] ?? 0,
                );
            }
        }

        return new self(
            temperature: $data['data_1h']['temperature'][$currentIdx] ?? 0.0,
            min_temperature: $data['data_day']['temperature_min'][0] ?? 0.0,
            max_temperature: $data['data_day']['temperature_max'][0] ?? 0.0,
            humidity: $data['data_1h']['relativehumidity'][$currentIdx] ?? 0,
            wind_speed: $data['data_1h']['windspeed'][$currentIdx] ?? 0.0,
            weather_code: $data['data_1h']['pictocode'][$currentIdx] ?? 0,
            weather_description: 'Meteoblue Weather',
            daily: DailyForecastData::collect($dailyData, \Spatie\LaravelData\DataCollection::class),
        );
    }
}
