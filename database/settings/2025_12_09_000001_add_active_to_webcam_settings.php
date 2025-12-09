<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('webcams.webcam1_active', true);
        $this->migrator->add('webcams.webcam2_active', true);
        $this->migrator->add('webcams.webcam3_active', false);
        $this->migrator->add('webcams.webcam4_active', true);
    }
};
