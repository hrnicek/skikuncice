<?php

if (!function_exists('getCurrentSeason')) {
    /**
     * Získá aktuální sezónu (winter/summer)
     */
    function getCurrentSeason(): string
    {
        return app(\App\Services\SeasonService::class)->getCurrentSeason(request());
    }
}