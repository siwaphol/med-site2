<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
        return view('backend.curriculum.create');
    }

    public function store()
    {
        dd(\Input::all());
    }

    public function update($id)
    {
        dd(\Input::all());
    }
}
