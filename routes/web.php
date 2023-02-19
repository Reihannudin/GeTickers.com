<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\MainController::class)->group(function (){
    Route::get('/' , 'IndexPage')->name('home.all');
    Route::get('/concert' , 'ConcertPage')->name('concert.all');
    Route::get('/events' , 'EventPage')->name('events.all');
});

Route::controller(\App\Http\Controllers\StoreController::class)->group(function (){
    Route::get('/store' , 'StoreAllProduct')->name('store.all');
    Route::get('/store/album' , 'StoreAlbumProduct')->name('store.album');
    Route::get('/store/collection' , 'StoreCollectionProduct')->name('store.collection');
    Route::get('/store/merch' , 'StoreMerchProduct')->name('store.merch');
    Route::get('/store/tour/merch' , 'StoreTourProduct')->name('store.tour.merch');
    Route::get('/store/favorite' , 'StoreFavoriteProduct')->name('store.favorite');
});

Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){

//    Login
    Route::get('/login' , 'LoginAll')->name('login.all');
    Route::post('/login' , 'Login')->name('login.store');

//    Register
    Route::get('/register' , 'RegisterAll')->name('register.all');
    Route::post('/register' , 'Register')->name('register.store');

//    Logout
    Route::get('/user/logout' , 'Logout')->name('logout');
});

Route::controller(\App\Http\Controllers\ConcertController::class)->group(function (){
    Route::get('/concert/detail/' , 'DetailConcert')->name('detail.concert');
});

