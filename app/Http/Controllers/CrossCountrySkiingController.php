<?php

namespace App\Http\Controllers;

class CrossCountrySkiingController extends Controller
{
    public function index()
    {
        seo()->title('Běžky');

        return inertia('CrossCountrySkiing');
    }
}
