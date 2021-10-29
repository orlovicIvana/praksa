<?php

use App\Http\Controllers\GrupaController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\PraktikantController;
use App\Http\Controllers\ZadatakController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("praktikants",[PraktikantController::class, "index"]);
Route::get("praktikants/{id}",[PraktikantController::class, "show"]);
Route::post("praktikants",[PraktikantController::class, "store"]);
Route::put("praktikants/{praktikant}",[PraktikantController::class, "update"]);
Route::delete("praktikants/{praktikant}",[PraktikantController::class, "destroy"]);

Route::get("mentors",[MentorController::class, "index"]);
Route::get("mentors/{id}",[MentorController::class, "show"]);
Route::post("mentors",[MentorController::class, "store"]);
Route::put("mentors/{mentor}",[MentorController::class, "update"]);
Route::delete("mentors/{mentor}",[MentorController::class, "destroy"]);

Route::get("grupas",[GrupaController::class, "index"]);
Route::get("grupas/{id}",[GrupaController::class, "show"]);
Route::post("grupas",[GrupaController::class, "store"]);
Route::put("grupas/{grupa}",[GrupaController::class, "update"]);
Route::delete("grupas/{grupa}",[GrupaController::class, "destroy"]);

Route::get("zadataks",[ZadatakController::class, "index"]);
Route::get("zadataks/{id}",[ZadatakController::class, "show"]);
Route::post("zadataks",[ZadatakController::class, "store"]);
Route::put("zadataks/{zadatak}",[ZadatakController::class, "update"]);
Route::delete("zadataks/{zadatak}",[ZadatakController::class, "destroy"]);
