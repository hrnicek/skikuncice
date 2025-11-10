<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        seo()->title('O areálu');

        return inertia('About');
    }
}
