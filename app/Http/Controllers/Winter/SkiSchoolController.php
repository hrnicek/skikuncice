<?php

namespace App\Http\Controllers\Winter;

class SkiSchoolController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Ski škola');

        return inertia('SkiSchool');
    }
}
