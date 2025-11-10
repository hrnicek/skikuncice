<?php

namespace App\Http\Controllers;

class OperatingHoursController extends Controller
{
    public function index()
    {
        seo()->title('Provozní doba');

        return inertia('OperatingHours');
    }
}
