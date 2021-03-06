<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('login');
// });
//admin

Route::view("/admin",'admin');
//product input
Route::get("/addproduct",[ProductController::class,'inserTable']);
Route::post("/addimage",[ProductController::class,'inserData'])->name('addimage');

Route::get("/productshowadmin",[ProductController::class,'productshowadmin']);

Route::get("/productshow",[ProductController::class,'show']);
Route::get('delete/{id}',[ProductController::class,'destroy']);
Route::get('edit/{id}',[ProductController::class,'edit']);
Route::post('update/{id}',[ProductController::class,'update']);

//customer
Route::post("/login",[UserController::class,'login']);
Route::get("/login",[UserController::class,'loginpage']);
Route::view("/signup",'signup');
Route::post("/signup",[UserController::class,'signup']);

Route::get("/",[ProductController::class,'index']);
Route::get("/logout",[UserController::class,'logout']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartlist']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);




