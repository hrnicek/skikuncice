<?php

namespace App\Http\Controllers;

class AccommodationController extends Controller
{
    public function index()
    {
        return inertia('Accommodation/Index');
    }
}
