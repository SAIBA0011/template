<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    function index(){
        return view('courses.index');
    }

    function intro(){
        return view('courses.course-intro');
    }
}
