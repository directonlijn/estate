<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\Settings as Settings;

class StandardController extends Controller
{
    /**
     *
     * Shows main page
     *
     */
    public function GetIndex ()
    {
        return \View::make('pages/home');
    }

    /**
     *
     * Shows disclaimer page
     *
     */
    public function GetDisclaimer ()
    {
        return \View::make('pages/disclaimer');
    }

    /**
     *
     * Shows contact page
     *
     */
    public function GetContact ()
    {
        return \View::make('pages/contact');
    }
}
