<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\CategoryController;
use App\Http\Controllers\ApiController\EconomyController;
use App\Http\Controllers\ApiController\MoreController;
use App\Http\Controllers\ApiController\PoliticController;
use App\Http\Controllers\ApiController\PopularController;
use App\Http\Controllers\ApiController\SiteController;
use App\Http\Controllers\ApiController\SportController;
use App\Http\Controllers\ApiController\TechnologyController;
use App\Http\Controllers\ApiController\TypeController;


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

Route::controller(PopularController::class)->group(function(){

    Route::get("get_index/popular","index");
    Route::get("create/popular","create");
    Route::post("store/popular","store");
    Route::get("info/popular/{id}","info");
    Route::get("edit/popular/{id}","edit");
    Route::get("info/popular/{id}","info");
    Route::post("update/popular/{id}","update");
    Route::get("delete/popular/{id}","destroy");
    Route::get("single_page/popular","single");

});

Route::controller(SiteController::class)->group(function(){

    Route::get("index/site","index");

});

Route::controller(SportController::class)->group(function(){

    Route::get("get_index/sport","index");
    Route::post("store/sport","store");
    Route::get("info/sport/{id}","info");
    Route::get("edit/sport/{id}","edit");
    Route::post("update/sport/{id}","update");
    Route::get("delete/sport/{id}","destroy");
    Route::get("info/sport/{id}","info");
    Route::get("single_page/sport","single");

});


Route::controller(TechnologyController::class)->group(function(){

    Route::get("get_index/technology","index");
    Route::post("store/technology","store");
    Route::get("info/technology/{id}","info");
    Route::get("edit/technology/{id}","edit");
    Route::post("update/technology/{id}","update");
    Route::get("delete/technology/{id}","destroy");
    Route::get("info/technology/{id}","info");
    Route::get("single_page/technology","single");

});

Route::controller(TypeController::class)->group(function(){

    Route::get("get_index/type","index");
    Route::post("store/type","store");

});
