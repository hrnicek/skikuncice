<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('weather.piste_snow_depth_cm', 0);
        $this->migrator->add('weather.off_piste_snow_depth_cm', 0);
        $this->migrator->add('weather.new_snowfall_cm', 0);
        $this->migrator->add('weather.show_stats', 0);
    }
};
