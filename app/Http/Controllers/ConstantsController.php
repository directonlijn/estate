<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\Settings as Settings;

class ConstantsController extends Controller
{
    public function GetConstants ()
    {
        $constants = Constants:all();

        return $constants;
    }
}
