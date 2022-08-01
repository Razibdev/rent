<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\PropertyController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/contact', [ContactController::class, 'contact']);
Route::post('/subscription', [ContactController::class, 'subscription']);
Route::get('/property', [PropertyController::class, 'property']);
Route::get('/property-region', [PropertyController::class, 'propertyRegion']);
Route::get('/property-for-investor', [PropertyController::class, 'propertyForInvestor']);
Route::get('/property-for-featured', [PropertyController::class, 'propertyForFeatured']);
Route::get('/property-neighbouring/{id}', [PropertyController::class, 'propertyNeighbouring']);
Route::get('/properties/move-in-croatia', [PropertyController::class, 'propertyMoveCroatia']);
Route::get('/property-single/{id}', [PropertyController::class, 'propertySingle']);
Route::get('/property-related/{id}', [PropertyController::class, 'propertyRelated']);
Route::get('/city', [PropertyController::class, 'city']);
Route::get('/country', [PropertyController::class, 'country']);
Route::get('/state', [PropertyController::class, 'state']);
Route::get('/agent', [PropertyController::class, 'agent']);
