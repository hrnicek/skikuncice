<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Inertia\Inertia;
use App\Models\Event;
use App\Data\NewsData;
use App\Data\PostData;
use App\Data\EventData;
use App\Models\RestaurantMenu;
use App\Data\RestaurantMenuData;

class HomepageController extends Controller
{
    public function index()
    {
        seo()->title('Hory, kde uslyšíte ticho');

        $latestPost = Post::query()->latest('published_at')->first();
        $events = Event::season()->published()
            ->upcoming()
            ->orderBy('date_from')
            ->with('media')
            ->take(3)
            ->get();

        $nearestEvent = Event::season()->nearnest()->first();

        $news = News::published()->latest('published_at')->take(1)->get();

        $foodMenu = RestaurantMenu::published()
            ->byType('food')
            ->latestMenu()
            ->first();

        $drinksMenu = RestaurantMenu::published()
            ->byType('drinks')
            ->latestMenu()
            ->first();

        return Inertia::render('Homepage', [
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
