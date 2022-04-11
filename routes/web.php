<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UjianController;
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
// routing default
// Route::get('/', function () {
//     return view('porfolio');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'tentang']);

// Route::get('/kursus',[CourseController::class,'index'])->name('course.index');

//ujian
Route::get('/ujian', [UjianController::class, 'index']);
Route::get('/ujian/create', [UjianController::class, 'create']);
Route::post('/ujian', [UjianController::class, 'store']);
Route::delete('/ujian/{ujian}', [UjianController::class, 'destroy']);
Route::get('/ujian/{ujian}/edit', [UjianController::class, 'edit']);
Route::patch('/ujian/{ujian}', [UjianController::class, 'update']);

// Route::resource('ujian', UjianController::class);
