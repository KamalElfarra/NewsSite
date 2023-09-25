<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PoliticController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EconomyController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\ContactUsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login_page', function () {
    return view('welcome');
});


Route::get('/dashboard',[PanelController::class,"index"]);

// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

    Route::controller(SiteController::class)->group(function(){
        Route::get("/","index"); 
        Route::get("/info/{id}","info");    

    });
    
    
});
  
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
Route::controller(PoliticController::class)->group(function(){

        Route::get('/view/politic','index');
        Route::get('/create/politic','create');
        Route::post('/store/politic','store');
        Route::get('/edit/politic/{id}','edit');
        Route::post('/update/politic/{id}','update');
        Route::get('/delete/politic/{id}','destroy');
        Route::get('/info/politic/{id}','info');
        Route::get('/single_page/politic','single');

});

});


Route::controller(CategoryController::class)->group(function(){

    Route::get('/view/category','index');
    Route::get('/create/category','create');
    Route::post('/store/category','store');
    Route::get('/category/edit/{id}','edit');
    Route::post('/category/update/{id}','update');
    Route::get('/category/delete/{id}','destroy');


});

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(EconomyController::class)->group(function(){

    Route::get('/view/economy','index');
    Route::get('/create/economy','create');
    Route::post('/store/economy','store');
    Route::get('/edit/economy/{id}','edit');
    Route::post('/update/economy/{id}','update');
    Route::get('/delete/economy/{id}','destroy');
    Route::get('/info/economy/{id}','info');
    Route::get('/single_page/economy','single');

});

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(SportController::class)->group(function(){

    Route::get('/view/sport','index');
    Route::get('/create/sport','create');
    Route::post('/store/sport','store');
    Route::get('/edit/sport/{id}','edit');
    Route::post('/update/sport/{id}','update');
    Route::get('/delete/sport/{id}','destroy');
    Route::get('/info/sport/{id}','info');
    Route::get('/single_page/sport','single');

});

});



Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(TechnologyController::class)->group(function(){

    Route::get('/view/technology','index');
    Route::get('/create/technology','create');
    Route::post('/store/technology','store');
    Route::get('/edit/technology/{id}','edit');
    Route::post('/update/technology/{id}','update');
    Route::get('/delete/technology/{id}','destroy');
    Route::get('/info/technology/{id}','info');
    Route::get('/single_page/technology','single');

});

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(PopularController::class)->group(function(){

    Route::get('/view/popular','index');
    Route::get('/create/popular','create');
    Route::post('/store/popular','store');
    Route::get('/edit/popular/{id}','edit');
    Route::post('/update/popular/{id}','update');
    Route::get('/delete/popular/{id}','destroy');
    Route::get('/info/popular/{id}','info');
    Route::get('/single_page/popular','single');

});

});

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(MoreController::class)->group(function(){

    Route::get('/view/more','index');
    Route::get('/create/more','create');
    Route::post('/store/more','store');
    Route::get('/edit/more/{id}','edit');
    Route::post('/update/more/{id}','update');
    Route::get('/delete/more/{id}','destroy');
    Route::get('/info/more/{id}','info');
    Route::get('/single_page/more','single');

});

});

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(TypeController::class)->group(function(){

    Route::get('/view/type','index');
    Route::get('/create/type','create');
    Route::post('/store/type','store');


});

});

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::controller(ContactUsController::class)->group(function(){

    Route::get('/view/contact','index');
    Route::get('/table/contact','view');
    Route::post('/store/contact','store');
    Route::get('/edit/contact/{id}','edit');
    Route::post('/update/contact/{id}','update');
    Route::get('/delete/contact/{id}','destroy');
    Route::get('/download/image/contact/{id}','download_image');
    Route::get('/download/video/contact/{id}','download_video');
    Route::get('/info/contact/{id}','info');


});

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

 


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/add_team', function () {
        return view('dashboard');
    })->name('dashboard');
});
