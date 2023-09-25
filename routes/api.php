<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\CategoryController;
use App\Http\Controllers\ApiController\EconomyController;
use App\Http\Controllers\ApiController\MoreController;
use App\Http\Controllers\ApiController\PoliticController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(CategoryController::class)->group(function(){

    Route::get("get_index","index");
    Route::post("store","store");
    Route::get("edit/{id}","edit");
    Route::post("update/{id}","update");
    Route::get("delete/{id}","destroy");

});

Route::controller(EconomyController::class)->group(function(){

    Route::get("get_index/economy","index");
    Route::post("store/economy","store");
    Route::get("edit/economy/{id}","edit");
    Route::get("info/economy/{id}","info");
    Route::post("update/economy/{id}","update");
    Route::get("delete/economy/{id}","destroy");
    Route::get("single_page/economy","single");

});

Route::controller(MoreController::class)->group(function(){

    Route::get("get_index/more","index");
    Route::post("store/more","store");
    Route::get("edit/more/{id}","edit");
    Route::get("info/more/{id}","info");
    Route::post("update/more/{id}","update");
    Route::get("delete/more/{id}","destroy");
    Route::get("single_page/more","single");

});

Route::controller(PoliticController::class)->group(function(){

    Route::get("get_index/politic","index");
    Route::get("create/politic","create");
    Route::post("store/politic","store");
    Route::get("edit/politic/{id}","edit");
    Route::get("info/politic/{id}","info");
    Route::post("update/politic/{id}","update");
    Route::get("delete/politic/{id}","destroy");
    Route::get("single_page/politic","single");

});