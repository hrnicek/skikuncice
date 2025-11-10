<?php

namespace App\Http\Controllers;

class SnowparkController extends Controller
{
    public function index()
    {
        seo()->title('Snowpark');

        return inertia('Snowpark');
    }
}
