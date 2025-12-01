<?php

namespace App\Http\Controllers\Winter;

class TouristServicesCenterController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return inertia('TouristServicesCenter');
    }
}
