<?php

namespace App\Http\Controllers;

class CurrentWeatherController extends Controller
{
    public function index()
    {
        return inertia('CurrentWeather');
    }
}
