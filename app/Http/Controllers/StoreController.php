<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function StoreAllProduct(){
        return view('main.component.store.all-store');
    }

    public function StoreAlbumProduct(){
        return view('main.component.store.album-store');
    }

    public function StoreCollectionProduct(){
        return view('main.component.store.collection-store');
    }
    public function StoreMerchProduct(){
        return view('main.component.store.merch-store');
    }
    public function StoreTourProduct(){
        return view('main.component.store.tour-merch-store');
    }

    public function StoreFavoriteProduct(){
        return view('main.component.store.favorite-store');
    }
}

