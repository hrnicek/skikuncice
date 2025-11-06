<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class WeatherSettings extends Settings
{
    // Hloubka sníhu na sjezdovkách: 0 cm
    public int $piste_snow_depth_cm;

    // Mimo sjezdovky: 0 cm
    public int $off_piste_snow_depth_cm;

    // Nový sníh (za posledních 24 hodin): 0 cm
    public int $new_snowfall_cm;

    // Zobrazit statistiky: 0
    public int $show_stats;

    public static function group(): string
    {
        return 'weather';
    }
}
