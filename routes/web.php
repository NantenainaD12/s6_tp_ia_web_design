<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/front',[Controller::class,'login_front_page']);
Route::get('/',[Controller::class,'login_admin_page']);
Route::get('/getAll',[Controller::class,'getAll_admin']);
Route::get('/getAll_front',[Controller::class,'getAll_front']);
Route::post('/save',[Controller::class,'save_article']);
Route::get('/details{slug}',[Controller::class,'details']);
Route::get('/remove{slug}',[Controller::class,'remove']);
Route::get('/details/client{slug}',[Controller::class,'details_client']);

Route::post('/login_admin',[Controller::class,'login_admin']);
Route::post('/login_front',[Controller::class,'login_front']);

Route::get('/to_insert',[Controller::class,'to_insert']);
