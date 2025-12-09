<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('webcams.webcam1_name', 'Areál Hájovna, lyžařská škola a dětské hřiště');
        $this->migrator->add('webcams.webcam1_url', 'https://kamery.ebrana.cz/skikunciceHajovna');
        
        $this->migrator->add('webcams.webcam2_name', 'Horní stanice LD Triangl');
        $this->migrator->add('webcams.webcam2_url', 'https://kamery.ebrana.cz/skikunciceVystup');
        
        $this->migrator->add('webcams.webcam3_name', 'Dolní stanice LD Triangl');
        $this->migrator->add('webcams.webcam3_url', null);
        
        $this->migrator->add('webcams.webcam4_name', 'Triangl parkoviště');
        $this->migrator->add('webcams.webcam4_url', 'https://kamery.ebrana.cz/skikunciceStanice');
    }
};
