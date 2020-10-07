<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArmorController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/armors', [ArmorController::class, 'index']);
Route::get('/armors/{id}', [ArmorController::class, 'show']);
Route::post('/armors', [ArmorController::class, 'store']);
Route::delete('/armors/{id}', [ArmorController::class, 'delete']);
