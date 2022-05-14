<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\InputDataController;
use App\Http\Controllers\ReportingController;
use App\Http\Controllers\ParticipantsController;

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

Route::get('/', [AuthController::class, 'loginIndex']);

Route::get('/login', [AuthController::class, 'loginIndex']);
Route::get('/register', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::get('/admin', [DashboardAdminController::class, 'index']);
Route::get('/inputData', [InputDataController::class, 'index']);
Route::get('/reporting', [ReportingController::class, 'index']);
Route::get('/input-participant', [ParticipantsController::class,'index']);
Route::post('/submit', [ParticipantsController::class, 'store']);