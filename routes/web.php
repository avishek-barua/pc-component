<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class,'index']);

Route::get('all_products', [Controller::class, 'allProducts']);
Route::get('category_products/{id}',[Controller::class,'categoryProducts']);
Route::get('product_details/{id}',[Controller::class,'productDetails']);

Route::get('admin/login', [AdminController::class, 'admin_login']);
Route::post('admin/login_store', [AdminController::class, 'admin_login_store']);
Route::get('admin/dashboard', [AdminController::class, 'index']);
Route::get('admin/logout', [AdminController::class, 'logout']);


Route::get('admin/categories', [AdminController::class, 'categoryIndex']);
Route::get('admin/allCategories', [AdminController::class, 'allCategories']);
Route::get('admin/createCategory', [AdminController::class, 'createCategory']);
Route::post('admin/storeCategory', [AdminController::class, 'storeCategory']);
Route::get('admin/editCategory/{id}', [AdminController::class, 'editCategory']);
Route::post('admin/updateCategory/{id}', [AdminController::class, 'updateCategory']);


Route::get('admin/products', [AdminController::class, 'productIndex']);
Route::get('admin/getAllProducts', [AdminController::class, 'getallProducts']);
Route::get('admin/createProduct', [AdminController::class, 'createProduct']);
Route::post('admin/storeProduct', [AdminController::class, 'storeProduct']);
