<?php

namespace App\Http\Controllers;

use App\Services\SeasonService;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __construct(
        private SeasonService $seasonService
    ) {}

    /**
     * Nastaví konkrétní sezónu
     */
    public function setSeason(Request $request)
    {
        $request->validate([
            'season' => 'required|in:winter,summer',
        ]);

        try {
            $this->seasonService->setSeason($request->input('season'));

            return redirect()->back();
        } catch (\InvalidArgumentException $e) {
            return redirect()->back()->withErrors(['season' => $e->getMessage()]);
        }
    }

    /**
     * Přepne sezónu na opačnou
     */
    public function toggle(Request $request)
    {
        try {
            $newSeason = $this->seasonService->toggleSeason($request);

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['season' => 'Chyba při přepínání sezóny: '.$e->getMessage()]);
        }
    }
}
