<?php

namespace App\Http\Controllers;

class AgrotourismController extends Controller
{
    public function index()
    {
        return inertia('Agrotourism');
    }
}
