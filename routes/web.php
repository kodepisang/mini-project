<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');
    return view('welcome-ui');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/view', [ManagementUserController::class, 'index'])->name('userManagment');
Route::get('/users/addFrom', [ManagementUserController::class, 'create'])->name('userManagmentCreate');
Route::post('/users/post', [ManagementUserController::class, 'store'])->name('userManagmentStore');
Route::get('/users/{user}/edit', [ManagementUserController::class, 'edit'])->name('userManagmentEdit');
Route::delete('/users/{user}/delete', [ManagementUserController::class, 'destroy'])->name('userManagmentDelete');
Route::post('/users/{user}/update', [ManagementUserController::class, 'update'])->name('userManagmentUpdate');


Route::get('/barang/view', [ItemsController::class, 'index'])->name('barang');

// Route::get('/items/view', [ItemController::class, 'index'])->name('item');
