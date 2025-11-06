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

        $latestPost = Post::query()->latest('published_at')->first();
        $events = Event::published()
            ->upcoming()
            ->orderBy('date_from')
            ->with('media')
            ->take(3)
            ->get();

        return inertia('Homepage', [
            'weather' => $weather,
            'latestPost' => $latestPost ? PostData::fromModel($latestPost) : null,
            'events' => EventData::collect($events),
            'canAccessAdmin' => auth()->check() && auth()->user()->can('access_admin'),
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
