<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController; 
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/redirect', [CarController::class, 'redirect']);

Route::get('/users', [UserController::class, 'user']);

Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser']);

Route::get('/', [CarController::class, 'getData'])->name('index');
//Route::get('/', [ProjectController::class, 'getCars'])->name('index2');



Route::get('/cars', [AdminController::class,'cars']);
Route::get('delete/{id}', [AdminController::class, 'delete']);
Route::get('edit/{id}', [AdminController::class, 'showData']);
Route::put('update/{id}', [AdminController::class, 'update']);
Route::get('create', [AdminController::class, 'create']);
Route::post('add', [AdminController::class, 'add']);

// Category

Route::resource('category', CategoryController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
