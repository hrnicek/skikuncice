<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class WebcamSettings extends Settings
{
    public ?string $webcam1_name;
    public ?string $webcam1_url;
    public bool $webcam1_active;
    
    public ?string $webcam2_name;
    public ?string $webcam2_url;
    public bool $webcam2_active;
    
    public ?string $webcam3_name;
    public ?string $webcam3_url;
    public bool $webcam3_active;
    
    public ?string $webcam4_name;
    public ?string $webcam4_url;
    public bool $webcam4_active;

    public static function group(): string
    {
        return 'webcams';
    }
}
