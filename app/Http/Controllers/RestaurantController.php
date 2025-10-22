<?php

namespace App\Http\Controllers;

class RestaurantController extends Controller
{
    public function index()
    {
        return inertia('Restaurant');
    }
}
