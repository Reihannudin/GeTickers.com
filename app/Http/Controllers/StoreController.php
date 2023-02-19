<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function StoreAllProduct(){
        return view('main.layout.store');
    }

    public function StoreArtistAllProduct(){
        return view('main.component.store.artist.all-store');
    }

    public function StoreArtistAlbumProduct(){
        return view('main.component.store.artist.album-store');
    }

    public function StoreArtistCollectionProduct(){
        return view('main.component.store.artist.collection-store');
    }
    public function StoreArtistMerchProduct(){
        return view('main.component.store.artist.merch-store');
    }
    public function StoreArtistTourProduct(){
        return view('main.component.store.artist.tour-merch-store');
    }

    public function StoreArtistFavoriteProduct(){
        return view('main.component.store.favorite-store');
    }
}

