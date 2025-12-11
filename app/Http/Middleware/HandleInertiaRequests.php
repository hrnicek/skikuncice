<?php

namespace App\Http\Middleware;

use App\Models\Event;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;
use Illuminate\Http\Request;
use App\Services\SeasonService;
use App\Services\MeteoblueService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $seasonService = app(SeasonService::class);
        $currentSeason = $seasonService->getCurrentSeason($request);

        $meteoblueService = app(MeteoblueService::class);
        $currentWeather = $meteoblueService->currentWeather();

        $countEvents = Cache::remember('count_events', now()->addDay(), function () {
            return Event::published()->count();
        });

        return array_merge(parent::share($request), [
            'app' => [
                'locale' => App::getLocale(),
            ],
            'season' => [
                'current' => $currentSeason,
                'label' => $seasonService->getSeasonLabel($currentSeason),
                'isWinter' => $seasonService->isWinter($request),
                'isSummer' => $seasonService->isSummer($request),
                'available' => $seasonService->getAvailableSeasons(),
            ],
            'weather' => $currentWeather?->toArray() ?? [],
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            'count_events' => $countEvents,
        ]);
    }
}
