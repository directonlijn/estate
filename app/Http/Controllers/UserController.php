<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\User as User;

class UserController extends Controller
{
    public function GetIndex ()
    {
        //return View::make('users');

        $users = User::all();

        return \View::make('user/index')->with('users', $users);
    }
}
