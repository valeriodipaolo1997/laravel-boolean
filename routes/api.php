<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CocktailController;
use App\Http\Controllers\Api\CategoryController;

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

Route::get('drinks', [CocktailController::class, 'index'])->name('api.drinks');

Route::get('drinks/{project:id}', [CocktailController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

Route::get('categories/{project:id}', [CategoryController::class, 'show']);
