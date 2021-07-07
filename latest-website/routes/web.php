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

Route::get('/clear-cache', function() {
     		$exitCode = Artisan::call('config:clear');
		$exitCode = Artisan::call('cache:clear');
		$exitCode = Artisan::call('route:clear');
		$exitCode = Artisan::call('config:cache');
		return 'DONE'; //Return anything
	});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/linkstorage', function () {
   $exitCode = Artisan::call('storage:link', [] );
echo $exitCode;
});

Route::get('/clear', function () {
    Storage::deleteDirectory('public');
    Storage::makeDirectory('public');

    Artisan::call('route:clear');
    Artisan::call('storage:link', [] );
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forum', 'ForumController@show')->name('forum');

Route::get('/hunter-page', 'ForumController@HunterForum')->name('hunterforum');

Route::Post('/forum/add-forum', 'ForumController@AddForum')->name('add.forum');

Route::get('/pages/how-it-works', 'ForumController@Works')->name('works');

Route::get('/pages/our-insurance', 'ForumController@Insurance')->name('insurance');

Route::get('/pages/our-advisor', 'ForumController@Advisor')->name('advisor');

Route::get('/pages/individual-advisor', 'ForumController@individualAdvisor')->name('individualadvisor');

Route::get('/pages/start-date', 'ForumController@StartDate')->name('startdate');

Route::get('/pages/driver-form', 'ForumController@DriverForm')->name('driverform');

Route::get('/pages/vehicle-form', 'ForumController@VehicleForm')->name('vehicleform');




Route::get('/convert/{name}', function ($name) {
    return str_plural($name);
});