<?php

namespace App\Http\Controllers\Winter;

class KidsParadiseController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Dětský snowpark');

        return inertia('KidsParadise');
    }
}
