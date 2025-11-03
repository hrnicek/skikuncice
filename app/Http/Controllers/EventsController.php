<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        return inertia('Events/Index');
    }

    public function show(Event $event)
    {
        return inertia('Events/Show', [
            'event' => $event,
        ]);
    }
}
