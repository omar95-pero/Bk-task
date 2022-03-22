<?php

use Illuminate\Support\Facades\Route;

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
    return view('students.index');
});

Route::resource('/students', 'App\Http\Controllers\StudentController')->except(['create','show']);
Route::resource('/schools', 'App\Http\Controllers\SchoolController')->except(['create','show']);
