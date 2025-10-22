<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Services\WeatherService;

class HomepageController extends Controller
{
    public function index()
    {
        $weatherService = app(WeatherService::class);
        $weather = $weatherService->getWeather();

        $latestPost = Post::latest('published_at')->first();

        return inertia('Homepage', [
            'weather' => $weather,
            'latestPost' => $latestPost,
        ]);
    }

    public function calendar()
    {
        $events = Event::where('published', true)
            ->orderBy('date_from')
            ->get();

        return inertia('KalendarAkci', [
            'events' => $events,
        ]);
    }
}
