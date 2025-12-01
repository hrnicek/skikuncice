<?php

namespace App\Http\Controllers\Winter;

class SkiRentalController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Půjčovna lyží');

        return inertia('SkiRental');
    }
}
