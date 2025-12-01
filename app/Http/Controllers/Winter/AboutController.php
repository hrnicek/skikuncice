<?php

namespace App\Http\Controllers\Winter;

class AboutController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('O areálu');

        return inertia('About');
    }
}
