<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LangSwitcherController extends Controller
{
public function switch($locale)
    {
        // 1. Validace
        if (!array_key_exists($locale, LaravelLocalization::getSupportedLocales())) {
            abort(404);
        }

        // 2. KLÍČOVÝ KROK: Ručně uložit nový jazyk do session
        // Tím zabráníme middleware 'localeSessionRedirect', aby nás vrátil zpátky.
        Session::put('locale', $locale);
        
        // Také je dobré to říct přímo aplikaci pro tento request
        LaravelLocalization::setLocale($locale);

        // 3. Vyčištění URL a vytvoření nové
        // Nejbezpečnější metoda: Nejdřív odstranit starý jazyk, pak přidat nový.
        // Tím se vyhneme situaci, kdy se knihovna zamotá do '/en/en/...'
        $cleanUrl = LaravelLocalization::getNonLocalizedURL(url()->previous());
        $url = LaravelLocalization::getLocalizedURL($locale, $cleanUrl);

        // 4. Inertia Redirect
        return Inertia::location($url);
    }
}
