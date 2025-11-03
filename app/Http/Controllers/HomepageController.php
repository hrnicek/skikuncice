<?php

namespace App\Http\Controllers;

use App\Data\EventData;
use App\Data\PostData;
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
            'latestPost' => $latestPost ? PostData::fromModel($latestPost) : null,
        ]);
    }

    public function calendar()
    {
        $events = Event::published()
            ->orderBy('date_from')
            ->with('media')
            ->get();

        return inertia('KalendarAkci', [
            'events' => EventData::collect($events),
        ]);
    }
}
