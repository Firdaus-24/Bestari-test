<?php

use App\Http\Controllers\ParkingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/parking/check-availability', [ParkingsController::class, 'checkAvailability']);
Route::post('/parking/park-vehicle', [ParkingsController::class, 'parkVehicle']);
Route::post('/parking/exit-vehicle', [ParkingsController::class, 'exitVehicle']);
Route::get('/parking/check-total/{blockname}', [ParkingsController::class, 'blockName']);
