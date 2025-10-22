<?php

namespace App\Http\Controllers;

class SkiRentalController extends Controller
{
    public function index()
    {
        return inertia('SkiRental');
    }
}
