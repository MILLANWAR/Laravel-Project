<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\studentInfoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//01 - going to student/index file
Route::get('/students', function () {
    return view('students/index');
})->middleware(['auth', 'verified'])->name('students');

//02 - going to student/index file
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

// 03 - store student info to create function under studentInfoController
Route::post('/students/add',[studentInfoController::class, 'store'])
->middleware(['auth', 'verified'])
->name('student-store');

//04 - get all data from student info table
Route::get('/students', [StudentInfoController::class, 'index'])
->middleware(['auth', 'verified'])
->name('students');

//05 - view individually student info
Route::get('/students/{stuno}', [StudentInfoController::class, 'show'])
->middleware(['auth', 'verified'])
->name('students-show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
