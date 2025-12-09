<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\AgrotourismController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LangSwitcherController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\Winter\AboutController;
use App\Http\Controllers\Winter\AreaMapController;
use App\Http\Controllers\Winter\CrossCountrySkiingController;
use App\Http\Controllers\Winter\KidsParadiseController;
use App\Http\Controllers\Winter\OperatingHoursController;
use App\Http\Controllers\Winter\PricingController;
use App\Http\Controllers\Winter\RestaurantController;
use App\Http\Controllers\Winter\SkiBusController;
use App\Http\Controllers\Winter\SkiRentalController;
use App\Http\Controllers\Winter\SkiSchoolController;
use App\Http\Controllers\Winter\TouristServicesCenterController;
use App\Http\Controllers\Winter\WebcamsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {
        Route::get('/', [HomepageController::class, 'index'])->name('home');

        // global (translated routes)
        Route::get(LaravelLocalization::transRoute('routes.events.index'), [EventsController::class, 'index'])->name('events.index');
        Route::get(LaravelLocalization::transRoute('routes.events.show'), [EventsController::class, 'show'])->name('events.show');
        Route::get(LaravelLocalization::transRoute('routes.events.past'), [EventsController::class, 'past'])->name('events.past');
        Route::get(LaravelLocalization::transRoute('routes.accommodation.index'), [AccommodationController::class, 'index'])->name('accommodation');
        Route::get(LaravelLocalization::transRoute('routes.accommodation.show'), [AccommodationController::class, 'show'])->name('accommodation.show');
        Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact');
        Route::get(LaravelLocalization::transRoute('routes.weather'), [App\Http\Controllers\WeatherController::class, '__invoke'])->name('weather');

        // winter (translated routes)
        Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class, 'index'])->name('about');
        Route::get(LaravelLocalization::transRoute('routes.pricing'), [PricingController::class, 'index'])->name('pricing');
        Route::get(LaravelLocalization::transRoute('routes.operating-hours'), [OperatingHoursController::class, 'index'])->name('operating-hours');
        Route::get(LaravelLocalization::transRoute('routes.area-map'), [AreaMapController::class, 'index'])->name('area-map');
        Route::get(LaravelLocalization::transRoute('routes.webcams'), [WebcamsController::class, 'index'])->name('webcams');
        Route::get(LaravelLocalization::transRoute('routes.ski-school'), [SkiSchoolController::class, 'index'])->name('ski-school');
        Route::get(LaravelLocalization::transRoute('routes.ski-rental'), [SkiRentalController::class, 'index'])->name('ski-rental');
        Route::get(LaravelLocalization::transRoute('routes.ski-bus'), [SkiBusController::class, 'index'])->name('ski-bus');
        Route::get(LaravelLocalization::transRoute('routes.restaurant'), [RestaurantController::class, 'index'])->name('restaurant');
        Route::get(LaravelLocalization::transRoute('routes.tourist-services-center'), [TouristServicesCenterController::class, 'index'])->name('tourist-services-center');
        Route::get(LaravelLocalization::transRoute('routes.kids-paradise'), [KidsParadiseController::class, 'index'])->name('kids-paradise');
        Route::get(LaravelLocalization::transRoute('routes.cross-country-skiing'), [CrossCountrySkiingController::class, 'index'])->name('cross-country-skiing');

        // Summer (translated routes)
        Route::get(LaravelLocalization::transRoute('routes.agrotourism'), [AgrotourismController::class, 'index'])->name('agrotourism');

    });

Route::get('set-lang/{locale}', [LangSwitcherController::class, 'switch'])->name('lang.switch');

// Season management routes
Route::prefix('api/season')->group(function () {
    Route::post('/set', [SeasonController::class, 'setSeason'])->name('season.set');
    Route::post('/toggle', [SeasonController::class, 'toggle'])->name('season.toggle');
});
