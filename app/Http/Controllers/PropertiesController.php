<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;

class PropertiesController extends Controller
{
    public function GetIndex ()
    {
        return \View::make('pages/resulaten');
    }
}
