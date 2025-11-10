<?php

namespace App\Http\Controllers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LangSwitcherController extends Controller
{
    public function switch($locale)
    {
        app()->setLocale($locale);

        $url = LaravelLocalization::getLocalizedURL($locale, url()->previous(), [], true);

        return redirect($url);

    }
}
