<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodCalculatorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

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

// Strona główna
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

// Wyniki (BMI/BMR/MaxRep) użytkownika
Route::get('/myresult', [UserController::class, 'userHome'])->name('user.home')->middleware('is_user');

// Panel admina
Route::get('admin/home', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Panel produktów
Route::get('admin/home/products', [AdminController::class, 'productsList'])->name('admin.productsList')->middleware('is_admin');
Route::get('admin/home/products/create', [AdminController::class, 'createProducts'])->name('admin.createProducts')->middleware('is_admin');
Route::post('admin/home/products', [AdminController::class, 'storeProducts'])->name('admin.storeProducts')->middleware('is_admin');
Route::delete('admin/home/products/{product}', [AdminController::class, 'destroyProduct'])->name('admin.destroyProduct')->middleware('is_admin');
Route::get('admin/home/products/{product}/edit', [AdminController::class, 'editProduct'])->name('admin.editProduct')->middleware('is_admin');
Route::put('admin/home/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct')->middleware('is_admin');
// Panel planów dietetycznych
Route::get('admin/home/diets', [AdminController::class, 'dietList'])->name('admin.dietList')->middleware('is_admin');
Route::put('admin/home/diets/{diet}', [AdminController::class, 'changeFilePath'])->name('admin.changeFilePath')->middleware('is_admin');

// Kalkulatory BMI/BMR/MAKSYMALNE-POWTORZENIE
Route::get('calculators/bmi', [CalculatorController::class, 'bmi'])->name('calculator.bmi');
Route::put('calculators/bmi/{user}', [CalculatorController::class, 'bmiSavetoDB'])->name('calculator.bmiSavetoDB')->middleware('is_user');
Route::get('calculators/bmr', [CalculatorController::class, 'bmr'])->name('calculator.bmr');
Route::put('calculators/bmr/{user}', [CalculatorController::class, 'bmrSavetoDB'])->name('calculator.bmrSavetoDB')->middleware('is_user');
Route::get('calculators/maxrep', [CalculatorController::class, 'maxrep'])->name('calculator.maxrep');
Route::put('calculators/maxrep/{user}', [CalculatorController::class, 'maxrepSavetoDB'])->name('calculator.maxrepSavetoDB')->middleware('is_user');

// Licznik kalorii
Route::get('products', [FoodCalculatorController::class, 'productList'])->name('products.list');
Route::get('products/summary', [FoodCalculatorController::class, 'cartList'])->name('cart.list');
Route::post('products/summary', [FoodCalculatorController::class, 'addToCart'])->name('cart.store');
Route::post('products/update-summary', [FoodCalculatorController::class, 'updateCart'])->name('cart.update');
Route::post('products/summaryremove', [FoodCalculatorController::class, 'removeCart'])->name('cart.remove');
Route::post('products/summaryclear', [FoodCalculatorController::class, 'clearAllCart'])->name('cart.clear');
Auth::routes();