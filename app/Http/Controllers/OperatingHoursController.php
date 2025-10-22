<?php

namespace App\Http\Controllers;

class OperatingHoursController extends Controller
{
    public function index()
    {
        return inertia('OperatingHours');
    }
}
