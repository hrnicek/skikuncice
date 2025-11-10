<?php

namespace App\Http\Controllers;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        seo()->title('Fotogalerie');

        return inertia('PhotoGallery');
    }
}
