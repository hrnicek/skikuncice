<?php

namespace App\Http\Controllers;

class AccommodationController extends Controller
{
    public function index()
    {
        seo()->title('Ubytování');

        return inertia('Accommodation/Index');
    }
}
