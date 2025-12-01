<?php

namespace App\Http\Controllers\Winter;

class RestaurantController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Restaurace');

        return inertia('Restaurant');
    }
}
