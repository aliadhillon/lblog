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
// dd(debug_backtrace());

Route::get('/', 'WelcomeController')->name('home');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/profile', 'UserProfile')->name('profile');
Route::delete('/profile', 'Auth\DeleteController@destroy')->name('user.delete');

Route::resource('/posts', 'PostController');

// These controllers are just for testing puropse only.
Route::get('/search', 'SearchController');

// Test routes
Route::prefix('/test')->name('test.')->group(function(){
    Route::get('/', 'TestController@index')->name('index');
    Route::get('/form', 'TestController@form')->name('form');
    Route::post('/', 'TestController@store')->name('store');
});

Route::get('/pages', 'PageController');
Route::get('/pages/{page}', 'PagesController');


Route::prefix('/projects')->middleware('project')->namespace('Projects')->name('projects.')->group(function(){
    Route::get('/', 'ProjectController@index')->name('index');
    Route::get('/{project}', 'ProjectController@show')->name('show');
});

Route::get('exception', 'ExceptionController');


// Route::namespace('Social')->group(function(){
    // Route::get('/twitter', 'TwitterController@show')->name('twitter.show');
// });

// Route::get('user/profile', function () {
    // return "<a href=\" " . route('test.index') . "\">Test</a>";
// })->name('profile');

// These are for testing all HTTP request types.
// Route::name('test.')->prefix('/test')->group(function(){
    // Route::get('/', 'TestController@index')->name('index');
    // Route::get('/{test}', 'TestController@show')->name('show');
    // Route::get('/{test}/{another}', 'TestController@another')->where(['test' => '[0-9]+', 'another' => '[a-z]+'])->name('another');
// });


// Route::get('search/{search}', function ($search) {
    //  dd((request()->route()->named('test.show')));
// })->where('search', '.*')->name('search');

// Combined Route:group
// Route::group(['prefix' => 'projects', 'as' => 'projects.', 'middleware' => 'project', 'namespace' => 'Projects'], function () {
//     Route::get('/', 'ProjectController@index')->name('index');
//     Route::get('/{project}', 'ProjectController@show')->name('show');    
// });



