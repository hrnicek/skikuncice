<?php

namespace App\Http\Middleware;

use App\Services\SeasonService;
use App\Services\WeatherService;
use App\Settings\WeatherSettings;
use Illuminate\Http\Request;
use Inertia\Middleware;
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
        $weatherService = app(WeatherService::class);
        $seasonService = app(SeasonService::class);

        $currentSeason = $seasonService->getCurrentSeason($request);
        $weatherSettings = app(WeatherSettings::class)->toArray();

        return [
            ...parent::share($request),
            'locale' => LaravelLocalization::getCurrentLocale(),
            'available_locales' => config('app.available_locales'),
            'season' => [
                'current' => $currentSeason,
                'label' => $seasonService->getSeasonLabel($currentSeason),
                'isWinter' => $seasonService->isWinter($request),
                'isSummer' => $seasonService->isSummer($request),
                'available' => $seasonService->getAvailableSeasons(),
            ],
            'weather' => [
                ...$weatherService->getWeather(),
            ],
            'weatherSettings' => $weatherSettings,
        ];
    }
}
