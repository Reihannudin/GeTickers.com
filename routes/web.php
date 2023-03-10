<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\MainController::class)->group(function (){
    Route::get('/' , 'IndexPage')->name('home.all');
    Route::get('/concert' , 'ConcertPage')->name('concert.all');
});

Route::controller(\App\Http\Controllers\StoreController::class)->group(function (){
    Route::get('/store' , 'StoreAllProduct')->name('store.all');

    Route::get('/artist/store' , 'StoreArtistAllProduct')->name('store.artist.all');
    Route::get('/artist/store/album' , 'StoreArtistAlbumProduct')->name('store.artist.album');
    Route::get('/artist/store/collection' , 'StoreArtistCollectionProduct')->name('store.artist.collection');
    Route::get('/artist/store/merch' , 'StoreArtistMerchProduct')->name('store.artist.merch');
    Route::get('/artist/store/tour/merch' , 'StoreArtistTourProduct')->name('store.artist.tour.merch');
    Route::get('/artist/store/favorite' , 'StoreArtistFavoriteProduct')->name('store.artist.favorite');
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

Route::controller(\App\Http\Controllers\ProductController::class)->group(function (){
    Route::get('/detail/product/' , 'ProductDetail')->name('product.detail');
});

Route::controller(\App\Http\Controllers\CartController::class)->group(function (){
    Route::get('/cart' , 'CartAll')->name('cart.all');
});

Route::controller(\App\Http\Controllers\OrderController::class)->group(function (){
//   Route::get('/order' , 'OrderAll')->name('order.all');
    Route::get('/order/history' , 'OrderHistory')->name('order.history');
    Route::get('/order/return' , 'OrderReturn')->name('order.return');
});

Route::controller(\App\Http\Controllers\ProfileController::class)->group(function (){
    Route::get('/profile' , 'ProfileAll')->name('profile.all');
});

Route::controller(\App\Http\Controllers\PurchaseController::class)->group(function (){
   Route::get('/purchase' , 'PurchaseAll')->name('purchase.all');
});
