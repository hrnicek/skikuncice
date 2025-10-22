<?php

namespace App\Http\Controllers;

class KidsParadiseController extends Controller
{
    public function index()
    {
        return inertia('KidsParadise');
    }
}
