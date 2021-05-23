<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
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

Route::get('/', [EmployesController::class, 'index']);
Route::get('/employes/create', [EmployesController::class, 'create']);
Route::get('/employes/{id}', [EmployesController::class, 'show']);
Route::get('/employes/delete/{id}', [EmployesController::class, 'destroy']);
Route::post('/employes/save', [EmployesController::class, 'save']);
Route::put('/employes/{id}', [EmployesController::class, 'update']);
