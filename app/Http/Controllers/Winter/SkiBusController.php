<?php

namespace App\Http\Controllers\Winter;

class SkiBusController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Ski bus');

        return inertia('SkiBus');
    }
}
