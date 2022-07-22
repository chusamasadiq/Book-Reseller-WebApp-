<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('Login');
});

Route::post('login',[ProductController::class,'user_login']);
Route::get('/Home',[ProductController::class,'Home']);


Route::get('/Home/updateProduct/{id}',[ProductController::class, 'updateProduct']);
Route::post('/update',[ProductController::class, 'update']);

Route::get('/Home/delete/{id}',[ProductController::class, 'delete']);
Route::get('/Home/vendorblock/{id}',[ProductController::class, 'blockvendor']);
Route::get('/Home/userblock/{id}',[ProductController::class, 'blockuser']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});