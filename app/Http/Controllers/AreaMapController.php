<?php

namespace App\Http\Controllers;

class AreaMapController extends Controller
{
    public function index()
    {
        seo()->title('Mapa areálu');

        return inertia('AreaMap');
    }
}
