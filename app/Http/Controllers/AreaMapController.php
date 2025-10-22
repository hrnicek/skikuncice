<?php

namespace App\Http\Controllers;

class AreaMapController extends Controller
{
    public function index()
    {
        return inertia('AreaMap');
    }
}
