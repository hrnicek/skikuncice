<?php

namespace App\Http\Controllers\Winter;

class AreaMapController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Mapa areálu');

        return inertia('AreaMap');
    }
}
