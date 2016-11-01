<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\Settings as Settings;

class HomeController extends Controller
{
    public function GetIndex ()
    {
        $settings = Settings::all();

        $settings2;
        foreach($settings as $name => $value) {
            $settings2[$value['name']] = $value['value'];
        }

        print_r($settings2);

        return \View::make('pages/home')->with('settings', $settings2);
    }
}
