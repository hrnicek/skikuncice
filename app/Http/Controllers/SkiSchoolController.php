<?php

namespace App\Http\Controllers;

class SkiSchoolController extends Controller
{
    public function index()
    {
        return inertia('SkiSchool');
    }
}
