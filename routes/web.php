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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');
Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::get('send','mailController@send');

// Route::get('/tasks', function () {
//     //$tasks = DB::table('tasks')->get();
//     // $tasks = App\Task::all();
//     $tasks = App\Task::incomplete();
//     return view('tasks.index', compact('tasks'));
// });
//
// Route::get('/tasks/{task}', function ($id) {
//     //$task = DB::table('tasks')->find($id);
//     $tasks = App\Task::find($id);
//     return view('tasks.show', compact('task'));
// });

Route::get('hello', function () {
    $name = 'Vasya';
    return view('hello', compact('name'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
