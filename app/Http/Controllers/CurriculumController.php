<?php

namespace App\Http\Controllers;

use App\Curriculum;
use App\Exceptions\Validation\ValidationException;
use App\Http\Requests;
use Illuminate\Http\Request;
use Flash;

class CurriculumController extends Controller
{
    public function index()
    {
        return view('backend.curriculum.create');
    }

    public function store()
    {
        try {
            $oldCurriculum = Curriculum::where('category',\Input::get('category'))
                ->first();
            if(is_null($oldCurriculum)){
                $oldCurriculum = Curriculum::create(\Input::all());
            }
            $oldCurriculum->fill(\Input::all());
            $oldCurriculum->save();
            Flash::message('Curriculum was successfully added');

            return \Redirect::route('admin.curriculum.index');
        } catch (ValidationException $e) {
            return \Redirect::route('admin.curriculum.index')->withInput()->withErrors($e->getErrors());
        }
    }

    public function show($category)
    {
        $curriculum = Curriculum::where('category',$category)
            ->first();

        return view('curriculum.show',compact('curriculum'));
    }

    public function edit($category)
    {
        $curriculum = Curriculum::where('category',$category)
            ->first();
        if(is_null($curriculum)){
            $curriculum = new Curriculum();
            $curriculum->category = $category;
            $curriculum->period = "";
            $curriculum->save();
        }

        return view('backend.curriculum.edit',compact('curriculum'));
    }
    public function update($category)
    {
        // dd(\Input::all());
        try {
            $curriculum = Curriculum::where('category',$category)
            ->first();
            $curriculum->update(\Input::all());
            Flash::message('News was successfully updated');

            return \Redirect::route('admin.curriculum.edit',$category);
        } catch (ValidationException $e) {
            return \Redirect::route('admin.curriculum.edit',$category)->withInput()->withErrors($e->getErrors());
        }
    }
}
