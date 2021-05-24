<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\BurgerController;

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
    return view('welcome');
});

Route::get('cakes', [CakeController::class, 'index'])->name('cakes.index')->middleware('auth');
Route::get('/cakes/create', [CakeController::class, 'create'])->name('cakes.create');
Route::post('/cakes', [CakeController::class, 'store'])->name('cakes.store');
Route::get('/cakes/{id}', [CakeController::class, 'show'])->middleware('auth')->name('cakes.show');
Route::delete('/cakes/{id}', [CakeController::class, 'destroy'])->middleware('auth')->name('cakes.destroy');
Route::get('burgers', [BurgerController::class, 'index'])->name('burgers.index')->middleware('auth');
Route::get('/burgers/create', [BurgerController::class, 'create'])->name('burgers.create');
Route::post('/burgers', [BurgerController::class, 'store'])->name('burgers.store');
Route::get('/burgers/{id}', [BurgerController::class, 'show'])->middleware('auth')->name('burgers.show');
Route::delete('/burgers/{id}', [BurgerController::class, 'destroy'])->middleware('auth')->name('burgers.destroy');

Auth::routes(//[
    //'register' => false
//] -- disabling routes
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
