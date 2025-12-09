<?php

namespace App\Http\Controllers;

use App\Data\EventData;
use App\Data\NewsData;
use App\Data\PostData;
use App\Data\RestaurantMenuData;
use App\Models\Event;
use App\Models\News;
use App\Models\Post;
use App\Models\RestaurantMenu;
use App\Services\WeatherService;

class HomepageController extends Controller
{
    public function index()
    {
        seo()->title('Ski Kunčice - Lyžařský areál v srdci Beskyd');

        $weatherService = app(WeatherService::class);
        $weather = $weatherService->getWeather();

        $latestPost = Post::query()->latest('published_at')->first();
        $events = Event::season()->published()
            ->upcoming()
            ->orderBy('date_from')
            ->with('media')
            ->take(3)
            ->get();

        $nearestEvent = Event::season()->nearnest()->first();

        $news = News::published()->latest('published_at')->get();

        $foodMenu = RestaurantMenu::published()
            ->byType('food')
            ->latestMenu()
            ->first();

        $drinksMenu = RestaurantMenu::published()
            ->byType('drinks')
            ->latestMenu()
            ->first();

        return inertia('Homepage', [
            'weather' => $weather,
            'latestPost' => $latestPost ? PostData::fromModel($latestPost) : null,
            'news' => NewsData::collect($news),
            'events' => EventData::collect($events),
            'nearestEvent' => $nearestEvent ? EventData::fromModel($nearestEvent) : null,
            'foodMenu' => $foodMenu ? RestaurantMenuData::fromModel($foodMenu) : null,
            'drinksMenu' => $drinksMenu ? RestaurantMenuData::fromModel($drinksMenu) : null,
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
