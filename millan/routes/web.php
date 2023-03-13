<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectController;
use App\Http\Controllers\gradesController;
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
Route::get('/addstudent', [StudentInfoController::class,'index']);
Route::get('/addenrolledsubject', [EnrolledSubjectController::class,'index']);
Route::get('/addgrades', [gradesController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
