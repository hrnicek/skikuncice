<?php

namespace App\Http\Controllers;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        return inertia('PhotoGallery');
    }
}
