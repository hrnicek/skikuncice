<?php

namespace App\Http\Controllers;

class SkiRentalController extends Controller
{
    public function index()
    {
        seo()->title('Půjčovna lyží');

        return inertia('SkiRental');
    }
}
