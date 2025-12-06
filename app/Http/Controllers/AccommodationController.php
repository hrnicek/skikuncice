<?php

namespace App\Http\Controllers;

class AccommodationController extends Controller
{
    public function index()
    {
        seo()->title('Ubytování');

        return inertia('Accommodation/Index', [
            'accommodations' => \App\Models\Accommodation::available()
                ->with('media')
                ->latest()
                ->get()
                ->map(fn ($accommodation) => [
                    'id' => $accommodation->id,
                    'name' => $accommodation->name,
                    'address' => $accommodation->address,
                    'phone' => $accommodation->phone,
                    'email' => $accommodation->email,
                    'website' => $accommodation->website,
                    'image' => $accommodation->getFirstMediaUrl('default') ?: null,
                    'banner' => $accommodation->getFirstMediaUrl('default') ?: null,
                ]),
        ]);
    }

    public function show(\App\Models\Accommodation $accommodation)
    {
        if (! $accommodation->is_available) {
            abort(404);
        }

        seo()->title($accommodation->name);

        return inertia('Accommodation/Show', [
            'accommodation' => [
                'id' => $accommodation->id,
                'name' => $accommodation->name,
                'address' => $accommodation->address,
                'phone' => $accommodation->phone,
                'phone2' => $accommodation->phone2,
                'email' => $accommodation->email,
                'website' => $accommodation->website,
                'content' => $accommodation->content,
                'images' => $accommodation->getMedia('default')->map(fn ($media) => $media->getUrl()),
            ],
        ]);
    }
}
