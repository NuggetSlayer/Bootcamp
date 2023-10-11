<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\UserController;
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
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard', [InstructorController::class, 'my_courses'])->name('dashboard'); 
    Route::get('/course/{slug}', [InstructorController::class, 'course'])->name('course'); 
    Route::match(['get','post'], '/course-form', [InstructorController::class, 'store'])->name('course-form')->middleware('checkInstructor');
    Route::match(['get','post'], '/apply-form/{id}', [InstructorController::class, 'apply_store'])->name('apply-form');
    Route::match(['get','put'], '/edit-course-form/{slug}', [InstructorController::class, 'edit'])->name('edit-course-form')->middleware('checkInstructor');
    Route::get('/delete-course/{slug}', [InstructorController::class, 'destroy'])->name('delete-course')->middleware('checkInstructor');
    // Videos
    Route::match(['get','post'], '/video-form/{id}', [InstructorController::class, 'store_vid'])->name('video-form');
    Route::match(['get','put'], '/edit-video-form/{slug}', [InstructorController::class, 'edit_vid'])->name('edit-video-form');
    Route::get('/delete-video/{slug}', [InstructorController::class, 'destroy_vid'])->name('delete-video');
    Route::get('/enroll/{id}', [UserController::class, 'enroll'])->name('enroll'); 

});


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/course-detail/{slug}', [UserController::class, 'course_detail'])->name('course-detail');
Route::get('/course/video/{slug}', [InstructorController::class, 'video'])->name('video')->middleware('auth:sanctum',config('jetstream.auth_session'));


Route::get('/register/admin',[AdminController::class,'register'])->name('admin-register');
Route::get('/admin',[AdminController::class,'index'])->name('admin-dashboard');
Route::get('/admin/applicants',[AdminController::class,'applicant_list'])->name('applicants');
Route::get('/admin/applicants/hire/{id}',[AdminController::class,'hire'])->name('applicant-hire');
Route::get('/admin/applicants/reject/{id}',[AdminController::class,'reject'])->name('applicant-reject');

