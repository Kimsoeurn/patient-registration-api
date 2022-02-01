<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CommunesController;
use App\Http\Controllers\Api\DistrictsController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\VillagesController;
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
Route::post('login', [AuthController::class, 'frontLogin']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('user', function () {
        return auth()->user();
    });

    Route::apiResource('patients', PatientController::class);

    Route::get('provinces', [ProvinceController::class, 'index']);
    Route::get('provinces/{id}', [ProvinceController::class, 'show']);
    Route::get('provinces/{id}/districts', [ProvinceController::class, 'districts']);

    Route::get('districts', [DistrictsController::class, 'index']);
    Route::get('districts/{id}', [DistrictsController::class, 'show']);
    Route::get('districts/{id}/communes', [DistrictsController::class, 'communes']);

    Route::get('communes', [CommunesController::class, 'index']);
    Route::get('communes/{id}', [CommunesController::class, 'show']);
    Route::get('communes/{id}/villages', [CommunesController::class, 'villages']);

    Route::get('villages', [VillagesController::class, 'index']);
    Route::get('villages/{id}', [VillagesController::class, 'show']);
});


