<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
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


Route::get('company', [ProjectTypeController::class, 'create']);
Route::get('construction-Ptype', [ProjectTypeController::class, 'store']);
Route::get('view-Data', [ProjectTypeController::class, 'show']);

Route::get('createProject', [ProjectController::class, 'index']);
Route::get('create-project', [ProjectController::class, 'store']);
Route::get('view-project', [ProjectController::class, 'show']);
Route::get('destroy-project/{project}', [ProjectController::class, 'destroy']);
Route::get('edit-project/{project}', [ProjectController::class, 'edit']);
Route::get('update-project/{project}', [ProjectController::class, 'update']);