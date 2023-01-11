<?php

use App\Http\Controllers\IndexProjectController;
use App\Http\Controllers\StoreEnvironmentController;
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

Route::prefix('projects')->group(function() {
    Route::get('/', IndexProjectController::class)->name('project.index');
});

Route::prefix('enviroments')->group(function() {
    Route::post('/{project}', StoreEnvironmentController::class)->name('enviroments.store');
});


