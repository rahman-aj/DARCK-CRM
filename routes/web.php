<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Auth::routes(['register' => false]);

Route::get('employees', [
    'middleware' => 'auth',
    'uses' => 'EmployeeController@index'
]);

Route::get('department', [
    'middleware' => 'auth',
    'uses' => 'DepartmentController@index'
]);

Route::resource('employees', 'EmployeeController');
Route::resource('department', 'DepartmentController');


// Auth::routes();
// Auth::routes([
//   'register' => false, // Registration Routes...
//   'reset' => false, // Password Reset Routes...
//   'verify' => false, // Email Verification Routes...
// ]);

Route::get('/home', 'HomeController@index')->name('home');
