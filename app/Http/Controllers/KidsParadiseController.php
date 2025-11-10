<?php

namespace App\Http\Controllers;

class KidsParadiseController extends Controller
{
    public function index()
    {
        seo()->title('Dětský ráj');

        return inertia('KidsParadise');
    }
}
