<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
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
    return view('index');
});
Route::get('students', function () {
    return view('students.s_create');
});
Route::resource('students',StudentController::class);
Route::get('/apply',[StudentController::class,"apply"]);
Route::post('/apply1',[StudentController::class,"apply1"]);
Route::get('/LoginForm',[AdminController::class,"login"]);
Route::get('/back',[AdminController::class,"abacklogin"]);
Route::get('/back',[AdminController::class,"abacklogin"]);
Route::get('/registerHere',[AdminController::class,"registerHere"]);
Route::post('/register1',[AdminController::class,"register1"]);
Route::post('/create_log',[AdminController::class,"create_log"]);
Route::get('/ViewApplicant',[AdminController::class,"ViewApplicant"]);
Route::get('/Logout',[AdminController::class,"logout"]);
Route::get('/report',[AdminController::class,"report"]);
Route::get('/back1',[AdminController::class,"back1"]);
