<?php

namespace App\Http\Controllers\Winter;

class CrossCountrySkiingController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Běžky');

        return inertia('CrossCountrySkiing');
    }
}
