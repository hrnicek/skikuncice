<?php

return [
    'api_key' => env('METEOBLUE_API_KEY'),
    'base_url' => env('METEOBLUE_BASE_URL', 'https://my.meteoblue.com/packages/basic-1h_basic-day'),
    'cache_ttl' => env('METEOBLUE_CACHE_TTL', 3600), // Default 1 hour
];
