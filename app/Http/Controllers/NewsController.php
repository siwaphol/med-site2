<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function create()
    {
    	return view('news.create');
    }

    public function store(Requests\NewsFormRequest $request)
    {
        return Redirect::route('news')
            ->with('message', 'Successfully create news');
    }
}
