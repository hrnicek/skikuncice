<?php

namespace App\Http\Controllers;

class WebcamsController extends Controller
{
    public function index()
    {
        return inertia('Webcams');
    }
}
