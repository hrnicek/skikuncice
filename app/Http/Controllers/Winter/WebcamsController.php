<?php

namespace App\Http\Controllers\Winter;

use App\Settings\WebcamSettings;

class WebcamsController extends \App\Http\Controllers\Controller
{
    public function index(WebcamSettings $webcamSettings)
    {
        seo()->title('Webkamery');

        return inertia('Webcams', [
            'webcams' => $webcamSettings->getAllWebcams(),
        ]);
    }
}
