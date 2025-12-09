<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('webcams.webcam1_name', null);
        $this->migrator->add('webcams.webcam1_url', null);
        
        $this->migrator->add('webcams.webcam2_name', null);
        $this->migrator->add('webcams.webcam2_url', null);
        
        $this->migrator->add('webcams.webcam3_name', null);
        $this->migrator->add('webcams.webcam3_url', null);
        
        $this->migrator->add('webcams.webcam4_name', null);
        $this->migrator->add('webcams.webcam4_url', null);
    }
};
