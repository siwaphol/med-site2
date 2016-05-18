<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    public function create()
    {
        

        return view('frontend.course.create');
    }
}
