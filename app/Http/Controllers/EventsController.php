<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function index()
    {
        return inertia('Events/Index');
    }
}
