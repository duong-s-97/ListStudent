<?php

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

Route::get('/', [StudentController::class,"list"]);

Route::get('/student/listing', [StudentController::class,"list"]);
Route::post('/student/add', [StudentController::class,"add"]);
Route::get('/student/add', [StudentController::class,"viewAdd"]);


