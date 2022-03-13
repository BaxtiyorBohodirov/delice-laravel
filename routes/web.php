<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

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



Route::get('/', [SiteController::class,'index']);

Route::get('/lang/{lang}',[SiteController::class,'setlang']);

Route::get('/getProducts/{id}',[SiteController::class,'getProducts']);
Route::get('/about-us',[SiteController::class,'aboutUs']);
Route::post('/contact-form',[SiteController::class,'contactForm']);
Route::get('/get-product-detail/{id}',[SiteController::class,'getProductDetail']);
Route::get('/card',[SiteController::class,'card']);
Route::get('/catalog',[SiteController::class,'catalog']);
Route::get('/contacts',[SiteController::class,'contacts']);
Route::get('/gallery',[SiteController::class,'gallery']);
Route::get('/news',[SiteController::class,'news']);
Route::get('/news/{id}',[SiteController::class,'newsIn']);
Route::get('/search-results',[SiteController::class,'searchResults']);
Route::get('/sms',[SmsController::class,'index']);
Route::get('/sms-nexmo',[SmsController::class,'smsFromNexmo']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});