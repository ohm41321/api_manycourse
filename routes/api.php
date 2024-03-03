<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\ExamScheduleController; 
use App\Http\Controllers\CourseRegistrationController; 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('/course', CourseController::class);

Route::resource('/categories', CategoryController::class); 

Route::resource('/instructors', InstructorsController::class); 

Route::resource('/course-schedule', CourseScheduleController::class); 

Route::resource('/exam-schedule', ExamScheduleController::class); 

Route::resource('/course-register', CourseRegistrationController::class); 




