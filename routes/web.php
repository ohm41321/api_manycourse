<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseRegistrationController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//-------------------
Route::get('/', [HomeController::class, 'index']);



//register_course route
Route::get('/register-form', [CourseController::class, 'register'])->middleware('auth:sanctum')->name('register-form'); 
Route::get('/register-list', [CourseRegistrationController::class, 'list'])->middleware('auth:sanctum')->name('register-list'); 
Route::post('/register-course', [CourseRegistrationController::class, 'store'])->middleware('auth:sanctum')->name('register-course');

Route::get('/register-list/{registration_id}/edit', [CourseRegistrationController::class, 'edit'])->name('register-list-edit');
Route::patch('/register-list/{registration_id}', [CourseRegistrationController::class, 'update'])->name('update-registration');


Route::delete('/register-list-delete/{id}', [CourseRegistrationController::class, 'destroy'])
    ->middleware('auth:sanctum')
    ->name('register-list-delete');



//course route
Route::get('/drawing', [CourseController::class, 'drawing'])->middleware('auth:sanctum'); 
Route::get('/science', [CourseController::class, 'science'])->middleware('auth:sanctum'); 
Route::get('/math', [CourseController::class, 'math'])->middleware('auth:sanctum'); 
Route::get('/language', [CourseController::class, 'language'])->middleware('auth:sanctum'); 
Route::get('/sports', [CourseController::class, 'sports'])->middleware('auth:sanctum'); 

Route::get('/dev', [HomeController::class, 'dev']); 
