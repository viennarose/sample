<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TraineeController;

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
    return view('home');
});
// Route::get('/user', function () {
//     return view('user');
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/user', [UserController::class,'user'])->name('user');
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::patch('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'delete']);

Route::get('/about', [TrainorController::class,'trainor'])->name('trainor');
Route::get('/course', [CourseController::class,'course'])->name('course');
Route::get('/trainee', [TraineeController::class,'trainee'])->name('trainee');

Route::get('/trainor', [TrainorController::class, 'trainor']);
Route::get('/trainor/create', [TrainorController::class, 'create']);
Route::post('/trainor/create', [TrainorController::class, 'store']);




