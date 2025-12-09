<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class WebcamSettings extends Settings
{
    public ?string $webcam1_name = 'Areál Hájovna, lyžařská škola a dětské hřiště';
    public ?string $webcam1_url = 'https://kamery.ebrana.cz/skikunciceHajovna';
    public bool $webcam1_active = true;
    
    public ?string $webcam2_name = 'Horní stanice LD Triangl';
    public ?string $webcam2_url = 'https://kamery.ebrana.cz/skikunciceVystup';
    public bool $webcam2_active = true;
    
    public ?string $webcam3_name = 'Dolní stanice LD Triangl';
    public ?string $webcam3_url = null;
    public bool $webcam3_active = false;
    
    public ?string $webcam4_name = 'Triangl parkoviště';
    public ?string $webcam4_url = 'https://kamery.ebrana.cz/skikunciceStanice';
    public bool $webcam4_active = true;

    public static function group(): string
    {
        return 'webcams';
    }

    public function getAllWebcams(): array
    {
        $webcams = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($this->{"webcam{$i}_active"}) {
                $webcams[] = [
                    'name' => $this->{"webcam{$i}_name"},
                    'url' => $this->{"webcam{$i}_url"},
                ];
            }
        }
        return $webcams;
    }
}
