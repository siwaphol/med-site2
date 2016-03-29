<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('ball2');
});

Route::get("test", function() {
	return "testing";
} );

Route::get("ball", function()
{
	return view('test');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('browse', function ()
{
    $profiles = App\UserProfile::all();
    return view('frontend.browse', compact('profiles'));
});

Route::get('research', function ()
{
    return view('research');
});

Route::get('profile/{id}', function ($id)
{
    $user = App\UserProfile::find($id);
    $userEducations = App\UserEducation::where('user_profile_id', $id)->get();

    return view('frontend.profile', compact('user','userEducations'));
});

Route::get('profile/{id}/edit', function ($id)
{
    $user = App\UserProfile::find($id);
    // dont forget to create Form::model
    $userEducations = App\UserEducation::where('user_profile_id', $id)->get();

    return view('frontend.profile', compact('user','userEducations'));
});

Route::get('profile/create', function ()
{
    // dont forget to create Form::open
    return view('frontend.profile');
});

Route::get('api/profile', function (Request $request)
{
    $defaultPerPage = 10;
    $defaultPage = 1;

    if(!empty($request->input('per_page')) && (int)$request->input('per_page')>$defaultPerPage){
        $users = App\UserProfile::paginate((int)$request->input('per_page'));
    }else{
        $users = App\UserProfile::paginate($defaultPerPage);
    }

    return $users;
});

//News section
Route::get('news', ['as'=>'news', 'uses'=>'NewsController@create']);
Route::post('news', ['as'=>'news_store', 'uses'=>'NewsController@store']);
