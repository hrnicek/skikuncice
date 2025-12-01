<?php

namespace App\Http\Controllers\Winter;

class WebcamsController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Webkamery');

        return inertia('Webcams');
    }
}
