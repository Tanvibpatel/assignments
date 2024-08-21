<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'home']);
Route::get('/addassignment',[UserController::class,'addassignment']);
Route::get('/viewassignment',[UserController::class,'viewassignment']);
Route::get('/contact',[UserController::class,'contact']);

Route::post('/addassign',[UserController::class,'addassign']);
Route::post('/deletea', [UserController::class, 'deletea']);

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


