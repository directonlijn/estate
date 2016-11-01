<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\User as User;
use App\Models\Settings as Settings;

class UserController extends Controller
{
    public function GetIndex ()
    {
        //return View::make('users');

        $settings = Settings::all();

        $users = User::all();

        return \View::make('user/index')->with('users', $users)->with('settings', $settings);
    }
}
