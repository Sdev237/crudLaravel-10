<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/student', [StudentController::class, 'student_list']);

Route::get('/delete-student/{id}', [StudentController::class, 'delete_student']);

Route::get('/update-student/{id}', [StudentController::class, 'update_student']);
Route::post('/update/loading', [StudentController::class, 'update_student_loading']);

Route::get('/add', [StudentController::class, 'add_student']);
Route::post('/add/loading', [StudentController::class, 'add_student_loading']);

