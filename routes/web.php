<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "/"], function () {


    //user login and signup
    Route::get('login', [UserController::class,'index'])->name('login.index');
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::post('sign_up', [UserController::class, 'sign_up'])->name('sign_up');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');


//    Route::post('/user',[UserController::class,'store'])->middleware('guest')->name('user.store');
//
//    Route::middleware('auth')->resource('user', UserController::class)->except('store');
//    Route::middleware('auth')->resource('skill',SkillController::class);


//    Route::get('/search',SearchController::class)->name('search.index');

// Route::get('/search',[SearchController::class,'search'])->name('search.store');


    Route::get('/app',function(){
        return view('main.app');
    })->name('app');

    Route::get('/mess',function(){
        return view('main.messages');
    })->name('ess');



    Route::post('get_page',[IndexController::class,'get_page'])->name('get_page');








});




