<?php

namespace App\Http\Controllers;

class TouristServicesCenterController extends Controller
{
    public function index()
    {
        return inertia('TouristServicesCenter');
    }
}
