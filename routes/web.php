<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::auth();
//Auth::user();

Route::get('/index', ['App\Http\Controllers\BackendController', 'index']);
Route::get('/delete_user_id_frompost', ['App\Http\Controllers\BackendController', 'delete_user_id_frompost']);
//Route::get('/delete_user_id_frompost', array('App\Http\Controllers\BackendController', 'delete_user_id_frompost'));

//Route::get('App\Http\Controllers\CrudController','index');
//
//Route::post('App\Http\Controllers\CrudController','create');
//Route::post('App\Http\Controllers\CrudController','read');
//Route::post('App\Http\Controllers\CrudController','update');
//Route::post('App\Http\Controllers\CrudController','delete');
//
//Route::get('App\Http\Controllers\CrudController','show');
//
//
//
////Route::auth
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/api/user', function () {
//    // Only authenticated users may access this route...
//})->middleware();

//30min