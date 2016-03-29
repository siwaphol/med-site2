<?php

namespace App\Http\Controllers;

use App\News;
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
        $news = new News();
        $news->headline = $request->input('headline');
        $news->message = $request->input('message');
        $news->image = $request->file('image')->getClientOriginalName();
        $news->start_date = $request->input('start_date');
        $news->end_date = $request->input('end_date');
        $news->save();

        $request->file('image')->move(storage_path('app') , $news->image);

        $message = 'Successfully create news';

        return view('news.create', compact('message'));
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('news.detail', compact('news'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    public function update(Requests\NewsFormRequest $request, $id)
    {
        $news = News::find($id);
        $news->headline = $request->input('headline');
        $news->message = $request->input('message');
        $news->image = $request->file('image')->getClientOriginalName();
        $news->save();

        $request->file('image')->move(storage_path('app') , $news->image);

        $message = 'Successfully create news';

        return view('news.create', compact('message'));
    }
}
