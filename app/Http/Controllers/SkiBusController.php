<?php

namespace App\Http\Controllers;

class SkiBusController extends Controller
{
    public function index()
    {
        seo()->title('Ski bus');

        return inertia('SkiBus');
    }
}
