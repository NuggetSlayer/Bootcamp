<?php

use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/instructor', [InstructorController::class, 'index'])->name('instructor');
    Route::match(['get','post'], '/course-form', [InstructorController::class, 'store'])->name('course-form');
    Route::match(['get','put'], '/edit-course-form/{slug}', [InstructorController::class, 'edit'])->name('edit-course-form');
    Route::get('/delete-course/{slug}', [InstructorController::class, 'destroy'])->name('delete-course');
    Route::get('/course/{slug}', [InstructorController::class, 'course'])->name('course');
    // Videos
    Route::match(['get','post'], '/video-form/{id}', [InstructorController::class, 'store_vid'])->name('video-form');
    Route::get('/course/video/{slug}', [InstructorController::class, 'video'])->name('video');


});
