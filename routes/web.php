<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.user.home');
});

Route::get('/live', function () {
    return view('pages.user.live');
});

Route::get('/review', function () {
    return view('pages.user.review');
});

Route::get('/tded', function () {
    return view('pages.user.tded');
});

Route::get('/vicrow', function () {
    return view('pages.user.vicrow');
});

Route::get('/highlight', function () {
    return view('pages.user.highlight');
});

Route::get('/admin', function () {
    return redirect()->guest('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('test', function (){ return view('blogs.test');});
    Route::resource('ztstep', 'ZeanTstepContrller', ['except' => ['show']]);
    Route::resource('tstep', 'TstepController', ['except' => ['show']]);
    Route::resource('blogs', 'BlogController', ['except' => ['show']]);
    Route::resource('youtube', 'YoutubeController', ['except' => ['show']]);
    Route::resource('analyze', 'AnalyzeController', ['except' => ['show']]);
    Route::resource('zean', 'ZeanController', ['except' => ['show']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('setup', 'SetupController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('ckeditor', 'CkeditorController@index');
    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
});

