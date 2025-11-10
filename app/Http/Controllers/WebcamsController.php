<?php

namespace App\Http\Controllers;

class WebcamsController extends Controller
{
    public function index()
    {
        seo()->title('Webkamery');

        return inertia('Webcams');
    }
}
