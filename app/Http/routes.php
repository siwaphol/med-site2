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
    $top4news = \App\News::orderBy('updated_at','DESC')->take(4)->get();

    return view('ball2', compact('top4news'));
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
    Route::get('course/create','CourseController@create');
    Route::post('course/store','CourseController@store');
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

//Profile section
Route::get('profile/create', 'ProfileController@create');
Route::post('profile/store', 'ProfileController@store');
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
Route::get('news/{id}', 'NewsController@show');
Route::get('news/{id}/edit', 'NewsController@edit');
Route::post('news', ['as'=>'news_store', 'uses'=>'NewsController@store']);
Route::post('news/{id}', ['as'=>'news_update', 'uses'=>'NewsController@update']);

Route::get('upload_images/{filename}', function ($filename)
{
    $path = storage_path('app') . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

// Course Routes
Route::get('course/undergraduate', function(){
    return view('frontend.courses');
});


Route::get('course/curriculum', function(){
    return view('frontend.curriculum');
});

