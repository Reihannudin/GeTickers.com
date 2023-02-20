@extends('main.index-store-artists')

@section('content')
    <div class="content pb-5 bg-white">
        <div class="w-100 col-11 mx-2">
            <div class="col-12  mx-auto">
                <div class="col-12 bg-white position-fixed" style="z-index: 15">
                    <div class="col-12 mt-3 tex d-flex pb-2 pt-2 mx-auto" style="border-bottom: 1px solid #eeeeee">
                        <div class="d-flex col-8 mx-auto gap-2 text-center ">
                            <a href="{{ route('store.artist.all') }}" class="col active"><h6 class=" fw-bolder">All</h6></a>
                            <a href="{{ route('store.artist.album') }}" class="col"><h6 class=" fw-bolder">Album</h6></a>
                            <a href="{{ route('store.artist.album') }}" class="col"><h6 class=" fw-bolder">PHOTOBOOK</h6></a>
                            <a href="{{ route('store.artist.album') }}" class="col"><h6 class=" fw-bolder">DVD</h6></a>
                            <a href="{{ route('store.artist.collection') }}" class="col"><h6 class=" fw-bolder">Collection</h6></a>
                            <a href="{{ route('store.artist.tour.merch') }}" class="col"><h6 class=" fw-bolder">Tour Merch</h6></a>
                            <a href="{{ route('store.artist.favorite') }}" class="col"><h6 class=" fw-bolder">Favorites</h6></a>
                        </div>
                    </div>
                </div>

                <div class="container ">
                    <div class="col-12">
                        <div class="d-md-flex w-100 " style="margin-top:80px">
                            <div class="row col-12" style="min-height: 100px; margin-top: 80px ; height: 100%">
                                @yield('store-content')
                            </div>
                        </div> <!-- .item -->
                    </div>
                </div>
            </div>
        </div>
        <hr class="col-10 my-5 mx-auto "/>

    </div>

@endsection
