<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGroupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// User Groups Controller
Route::get('groups',[UserGroupController::class,'index'])->name('groups');
Route::get('groups/create',[UserGroupController::class,'create'])->name('groups.create');
Route::post('groups',[UserGroupController::class,'store'])->name('groups.store');
Route::delete('groups/{id}',[UserGroupController::class,'destroy'])->name('groups.destroy');


// // User Controller
// Route::get('users',[UsersController::class,'index'])->name('users');
// // Show Singel User
// Route::get('users/{id}',[UsersController::class,'show'])->name('show');
// // Show Singel User
// Route::get('users/create',[UsersController::class,'create'])->name('create');
// Route::post('users',[UsersController::class,'store'])->name('store');
// Route::post('users/{id}/edite',[UsersController::class,'edite'])->name('edite');

// Route::put('users/{id}',[UsersController::class,'update'])->name('update');

// // Delete Method
// Route::delete('users/{id}',[UsersController::class,'delete'])->name('delete');

Route::resource('users',UserController::class);

// ['except]['only']


// Catagory Work



Route::resource('catagories',CatagoryController::class, ['except' => ['show'] ]);


Route::resource('product',ProductController::class);


