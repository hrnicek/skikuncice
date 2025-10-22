<?php

namespace App\Http\Controllers;

class SkiBusController extends Controller
{
    public function index()
    {
        return inertia('SkiBus');
    }
}
