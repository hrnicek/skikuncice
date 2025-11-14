<?php

namespace App\Http\Controllers;

use App\Data\EventShowData;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        seo()->title('Kalendář akcí');

        $events = Event::season()->with('media')->upcoming()->get();

        return inertia('Events/Index', [
            'events' => $events,
        ]);
    }

    public function show(Event $event)
    {
        if (! $event->published) {
            abort(404);
        }

        seo()->title($event->title);

        $event->load('media');

        return inertia('Events/Show', [
            'event' => EventShowData::fromModel($event),
        ]);
    }

    public function past()
    {
        seo()->title('Archiv akcí');

        $events = Event::with('media')->past()->get();

        return inertia('Events/Past', [
            'events' => $events,
        ]);
    }
}
