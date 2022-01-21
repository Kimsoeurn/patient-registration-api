<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
    Route::resource('patients', PatientController::class);
});

Route::get('provinces', [\App\Http\Controllers\Api\ProvinceController::class, 'index']);
Route::get('provinces/{id}', [\App\Http\Controllers\Api\ProvinceController::class, 'show']);

Route::get('districts', [\App\Http\Controllers\Api\DistrictsController::class, 'index']);
Route::get('districts/{id}', [\App\Http\Controllers\Api\DistrictsController::class, 'show']);
