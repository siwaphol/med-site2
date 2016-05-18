<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

use App\Http\Requests;

class CourseController extends Controller
{
    public function create()
    {
        return view('frontend.course.create');
    }

    public function store(CourseRequest $request)
    {
        dd($request);
        return redirect('courses');
    }
}
