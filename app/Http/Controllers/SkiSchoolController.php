<?php

namespace App\Http\Controllers;

class SkiSchoolController extends Controller
{
    public function index()
    {
        seo()->title('Ski škola');

        return inertia('SkiSchool');
    }
}
