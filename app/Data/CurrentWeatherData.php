<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class CurrentWeatherData extends Data
{
    public function __construct(
        public array $units,
        public array $data_current,
    ) {}

    public static function fromApi(array $json): self
    {
        $units = $json['units'] ?? [
            'temperature' => 'C',
            'time' => 'YYYY-MM-DD hh:mm',
            'windspeed' => 'kmh',
        ];

        $cur = $json['data_current'] ?? [];

        return new self(
            units: [
                'temperature' => $units['temperature'] ?? 'C',
                'time' => $units['time'] ?? 'YYYY-MM-DD hh:mm',
                'windspeed' => $units['windspeed'] ?? 'kmh',
            ],
            data_current: [
                'time' => $cur['time'] ?? null,
                'isobserveddata' => $cur['isobserveddata'] ?? ($cur['isobservation'] ?? null),
                'metarid' => $cur['metarid'] ?? null,
                'isdaylight' => $cur['isdaylight'] ?? null,
                'windspeed' => isset($cur['windspeed']) ? (float) $cur['windspeed'] : 0.0,
                'zenithangle' => $cur['zenithangle'] ?? null,
                'pictocode_detailed' => $cur['pictocode_detailed'] ?? null,
                'pictocode' => $cur['pictocode'] ?? null,
                'temperature' => isset($cur['temperature']) ? (float) $cur['temperature'] : 0.0,
            ],
        );
    }
}
