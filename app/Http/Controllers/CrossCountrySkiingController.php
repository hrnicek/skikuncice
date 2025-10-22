<?php

namespace App\Http\Controllers;

class CrossCountrySkiingController extends Controller
{
    public function index()
    {
        return inertia('CrossCountrySkiing');
    }
}
