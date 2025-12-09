<?php

namespace App\Http\Controllers;

use App\Services\MeteoblueService;
use App\Settings\WebcamSettings;
use Inertia\Inertia;
use Inertia\Response;

class WeatherController extends Controller
{
    public function __invoke(MeteoblueService $weatherService, WebcamSettings $webcamSettings): Response
    {
        $forecast = $weatherService->simple();

        return Inertia::render('Weather', [
            'forecast' => $forecast,
            'webcams' => $webcamSettings->getAllWebcams(),
        ]);
    }
}
