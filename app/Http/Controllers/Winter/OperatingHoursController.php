<?php

namespace App\Http\Controllers\Winter;

class OperatingHoursController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Provozní doba');

        return inertia('OperatingHours');
    }
}
