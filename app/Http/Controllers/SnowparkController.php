<?php

namespace App\Http\Controllers;

class SnowparkController extends Controller
{
    public function index()
    {
        return inertia('Snowpark');
    }
}
