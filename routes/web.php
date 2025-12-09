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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {
        Route::get('/', [HomepageController::class, 'index'])->name('home');

        // global
        Route::get('/kalendar-akci', [EventsController::class, 'index'])->name('events.index');
        Route::get('/udalost/{event:slug}', [EventsController::class, 'show'])->name('events.show');
        Route::get('/kalendar-akci/archiv', [EventsController::class, 'past'])->name('events.past');
        Route::get('/ubytovani', [AccommodationController::class, 'index'])->name('accommodation');
        Route::get('/ubytovani/{accommodation}', [AccommodationController::class, 'show'])->name('accommodation.show');
        Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
        Route::get('/pocasi', [App\Http\Controllers\WeatherController::class, '__invoke'])->name('weather');

        // winter
        Route::get('o-arealu', [AboutController::class, 'index'])->name('about');
        Route::get('/cenik', [PricingController::class, 'index'])->name('pricing');
        Route::get('/provozni-doba', [OperatingHoursController::class, 'index'])->name('operating-hours');
        Route::get('/mapa-arealu', [AreaMapController::class, 'index'])->name('area-map');
        Route::get('/webkamery', [WebcamsController::class, 'index'])->name('webcams');
        Route::get('/lyzarska-skola', [SkiSchoolController::class, 'index'])->name('ski-school');
        Route::get('/pujcovna-lyzi', [SkiRentalController::class, 'index'])->name('ski-rental');
        Route::get('/skibus', [SkiBusController::class, 'index'])->name('ski-bus');
        Route::get('/restaurace', [RestaurantController::class, 'index'])->name('restaurant');
        Route::get('/centrum-sluzeb-turistum', [TouristServicesCenterController::class, 'index'])->name('tourist-services-center');
        Route::get('/detsky-raj', [KidsParadiseController::class, 'index'])->name('kids-paradise');
        Route::get('/bezky', [CrossCountrySkiingController::class, 'index'])->name('cross-country-skiing');

        // Summer
        Route::get('/agroturistika', [AgrotourismController::class, 'index'])->name('agrotourism');
     
    });

Route::get('set-lang/{locale}', [LangSwitcherController::class, 'switch'])->name('lang.switch');

// Season management routes
Route::prefix('api/season')->group(function () {
    Route::post('/set', [SeasonController::class, 'setSeason'])->name('season.set');
    Route::post('/toggle', [SeasonController::class, 'toggle'])->name('season.toggle');
});
