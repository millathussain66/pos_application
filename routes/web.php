<?php

use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\UserSalesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Roue::groups
    // Login System Our Project's
    Route::get('login',[AuthLoginController::class,'login'])->name('login');
    Route::post('login',[AuthLoginController::class,'confrim'])->name('confrim');




Route::group(['middleware'=>'auth'],function(){



    Route::get('dashboard', function () {


        return view('welcome');
    });



    Route::get('logout',[AuthLoginController::class,'logout'])->name('logout');


    // User Groups Controller
    Route::get('groups',[UserGroupController::class,'index'])->name('groups');
    Route::get('groups/create',[UserGroupController::class,'create'])->name('groups.create');
    Route::post('groups',[UserGroupController::class,'store'])->name('groups.store');
    Route::delete('groups/{id}',[UserGroupController::class,'destroy'])->name('groups.destroy');



    Route::resource('users',UserController::class);

    Route::get('users/{id}/sales',[UserSalesController::class,'index'])->name('user.sales');

    // ['except]['only']


    // Catagory Work



    Route::resource('catagories',CatagoryController::class, ['except' => ['show'] ]);
    Route::resource('product',ProductController::class);




});


