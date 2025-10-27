<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SeasonService
{
    const SEASON_WINTER = 'winter';

    const SEASON_SUMMER = 'summer';

    const COOKIE_NAME = 'season_preference';

    const COOKIE_DURATION = 60 * 24 * 180; // 180 dní (půl roku)

    /**
     * Získá aktuální sezónu z cookies nebo určí výchozí podle data
     */
    public function getCurrentSeason(?Request $request): string
    {
        // Pokusíme se získat sezónu z cookies
        $seasonFromCookie = $this->getSeasonFromCookie($request);

        if ($seasonFromCookie) {
            return $seasonFromCookie;
        }

        // Pokud není v cookies, určíme podle aktuálního data
        return $this->getDefaultSeasonByDate();
    }

    /**
     * Nastaví sezónu a uloží do cookies
     */
    public function setSeason(string $season): void
    {
        if (! $this->isValidSeason($season)) {
            throw new \InvalidArgumentException("Neplatná sezóna: {$season}");
        }

        // Pokud nastavujeme zimní sezónu (výchozí), pouze vymažeme cookie
        if ($season === self::SEASON_WINTER) {
            Cookie::queue(Cookie::forget(self::COOKIE_NAME));

            return;
        }

        // Pro ostatní sezóny nastavíme cookie
        Cookie::queue(
            self::COOKIE_NAME,
            $season,
            self::COOKIE_DURATION,
            '/',
            null,
            false, // secure
            true, // httpOnly
            true, // raw
            'lax' // sameSite
        );
    }

    /**
     * Přepne sezónu na opačnou
     */
    public function toggleSeason(?Request $request = null): string
    {
        $currentSeason = $this->getCurrentSeason($request);
        $newSeason = $currentSeason === self::SEASON_WINTER ? self::SEASON_SUMMER : self::SEASON_WINTER;

        $this->setSeason($newSeason);

        return $newSeason;
    }

    /**
     * Získá sezónu z cookies
     */
    private function getSeasonFromCookie(?Request $request = null): ?string
    {
        if ($request) {
            $season = $request->cookie(self::COOKIE_NAME);
        } else {
            $season = Cookie::get(self::COOKIE_NAME);
        }

        return $this->isValidSeason($season) ? $season : null;
    }

    /**
     * Určí výchozí sezónu - zimní je primární/výchozí
     */
    private function getDefaultSeasonByDate(): string
    {
        // Zimní sezóna je primární/výchozí
        return self::SEASON_WINTER;
    }

    /**
     * Ověří, zda je sezóna platná
     */
    private function isValidSeason(?string $season): bool
    {
        return in_array($season, [self::SEASON_WINTER, self::SEASON_SUMMER]);
    }

    /**
     * Získá všechny dostupné sezóny
     */
    public function getAvailableSeasons(): array
    {
        return [
            self::SEASON_WINTER => 'Zimní sezóna',
            self::SEASON_SUMMER => 'Letní sezóna',
        ];
    }

    /**
     * Získá lokalizovaný název sezóny
     */
    public function getSeasonLabel(string $season): string
    {
        $labels = $this->getAvailableSeasons();

        return $labels[$season] ?? $season;
    }

    /**
     * Zkontroluje, zda je aktuálně zimní sezóna
     */
    public function isWinter(?Request $request = null): bool
    {
        return $this->getCurrentSeason($request) === self::SEASON_WINTER;
    }

    /**
     * Zkontroluje, zda je aktuálně letní sezóna
     */
    public function isSummer(?Request $request = null): bool
    {
        return $this->getCurrentSeason($request) === self::SEASON_SUMMER;
    }

    /**
     * Vymaže preference sezóny a vrátí se k výchozí (zimní)
     */
    public function clearSeason(): string
    {
        Cookie::queue(Cookie::forget(self::COOKIE_NAME));

        return self::SEASON_WINTER;
    }
}
