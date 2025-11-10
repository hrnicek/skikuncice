<?php

namespace App\Http\Controllers;

class RestaurantController extends Controller
{
    public function index()
    {
        seo()->title('Restaurace');

        return inertia('Restaurant');
    }
}
