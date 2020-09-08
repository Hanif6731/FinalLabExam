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
    return view('welcome');
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login',['uses'=>'LoginController@verify']);

Route::middleware('sess')->middleware('type')->resource('employer','EmployeerController');
Route::middleware('sess')->middleware('type')->get('employer/delete/{id}','EmployeerController@delete')
    ->name('employer.delete');
Route::middleware('sess')->resource('job','JobController');
Route::middleware('sess')->get('job/delete/{id}','JobController@delete')
    ->name('job.delete');
