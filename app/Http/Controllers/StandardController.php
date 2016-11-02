<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\Settings as Settings;

class StandardController extends Controller
{
    public function GetDisclaimer ()
    {
        $settings = Settings::all();

        $settings2;
        foreach($settings as $name => $value) {
            $settings2[$value['name']] = $value['value'];
        }

        return \View::make('pages/disclaimer')->with('settings', $settings2);
    }

    public function GetContact ()
    {
        $settings = Settings::all();

        $settings2;
        foreach($settings as $name => $value) {
            $settings2[$value['name']] = $value['value'];
        }

        return \View::make('pages/contact')->with('settings', $settings2);
    }
}
