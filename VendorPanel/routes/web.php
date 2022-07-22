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
Route::get('login',[ProductController::class,'login'])->name('login');
Route::get('/Home',[ProductController::class,'Home']);
Route::get('register',[ProductController::class,'register'])->name('register');
Route::get('term',[ProductController::class,'term'])->name('term');
Route::get('aboutus',[ProductController::class,'aboutus'])->name('aboutus');
Route::get('contactus',[ProductController::class,'contactus'])->name('contactus');
Route::get('AddProduct',[ProductController::class, 'create']);
Route::post('InsertProduct/insert',[ProductController::class, 'insert']);
Route::post('Signup/insert',[ProductController::class,'signup']);


Route::get('/Home/updateProduct/{id}',[ProductController::class, 'updateProduct']);
Route::post('/update',[ProductController::class, 'update']);

Route::get('/Home/delete/{id}',[ProductController::class, 'delete']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});