<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    function index(){
        return view('profile.index');
    }

    function edit(){
        return view('profile.edit');
    }

    function cpd(){
        return view('profile.cpd');
    }

    function events(){
        return view('profile.events');
    }

    function courses(){
        return view('profile.courses');
    }

    function inbox(){
        return view('profile.inbox');
    }

    function assignments(){
        return view('profile.assignments');
    }

    function membership(){
        return view('profile.membership');
    }

    function invoice(){
        return view('profile.invoice');
    }
}
