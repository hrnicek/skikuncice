<?php

namespace App\Http\Controllers;

class PricingController extends Controller
{
    public function index()
    {
        return inertia('Pricing');
    }
}
