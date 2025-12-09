<?php

namespace App\Http\Controllers;

use App\Services\MeteoblueService;
use Inertia\Inertia;
use Inertia\Response;

class WeatherController extends Controller
{
    public function __invoke(MeteoblueService $weatherService): Response
    {
        $forecast = $weatherService->getForecast();

        return Inertia::render('Weather', [
            'forecast' => $forecast,
        ]);
    }
}
