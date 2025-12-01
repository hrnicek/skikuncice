<?php

namespace App\Http\Controllers\Winter;

class PricingController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return inertia('Pricing');
    }
}
