<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SkillTypeController;
use App\Http\Controllers\SpecialisationController;
use App\Http\Controllers\SkillController;

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

/*  ARMORS ROUTES */

Route::get('/armors', [ArmorController::class, 'index']);
Route::get('/armors/{id}', [ArmorController::class, 'show']);
Route::post('/armors', [ArmorController::class, 'store']);
Route::delete('/armors/{id}', [ArmorController::class, 'delete']);

/*  RACES ROUTES */

Route::get('/races', [RaceController::class, 'index']);
Route::get('/races/{id}', [RaceController::class, 'show']);
Route::post('/races', [RaceController::class, 'store']);
Route::delete('/races/{id}', [RaceController::class, 'delete']);

/*  JOBS ROUTES */

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::delete('/jobs/{id}', [JobController::class, 'delete']);

/*  SKILLS TYPES ROUTES */

Route::get('/skills-types', [SkillTypeController::class, 'index']);
Route::get('/skills-types/{id}', [SkillTypeController::class, 'show']);
Route::post('/skills-types', [SkillTypeController::class, 'store']);
Route::delete('/skills-types/{id}', [SkillTypeController::class, 'delete']);

/*  SPECIALISATIONS ROUTES */

Route::get('/specialisations', [SpecialisationController::class, 'index']);
Route::get('/specialisations/{id}', [SpecialisationController::class, 'show']);
Route::post('/specialisations', [SpecialisationController::class, 'store']);
Route::delete('/specialisations/{id}', [SpecialisationController::class, 'delete']);

/*  SKILLS ROUTES */

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);
Route::post('/skills', [SkillController::class, 'store']);
Route::delete('/skills/{id}', [SkillController::class, 'delete']);