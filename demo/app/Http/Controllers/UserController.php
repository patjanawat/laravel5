<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function get(){
        return view("user");
    }

    function users(){
        return "Get all user.";
    }

    function profile(){
        return "My profile.";
    }
}
