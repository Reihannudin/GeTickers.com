@extends('main.index')

@section('content')
    <div class="content pb-5 bg-white">
        <div class="w-100 col-11 mx-2">
            <div class="col-12  mx-auto">
                <div class="col-12 bg-white position-fixed" style="z-index: 15">
                    <div class="col-7 mt-3 tex d-flex pb-0 pt-2 mx-auto" style="border-bottom: 1px solid #eeeeee">
                        <div class="d-flex col-12 gap-2 text-center ">
                            <a href="{{ route('store.artist.all') }}" class="col active"><h5>All</h5></a>
                            <a href="{{ route('store.artist.album') }}" class="col"><h5>Album</h5></a>
                            <a href="{{ route('store.artist.collection') }}" class="col"><h5>Collection</h5></a>
                            <a href="{{ route('store.artist.merch') }}" class="col"><h5>Merch</h5></a>
                            <a href="{{ route('store.artist.tour.merch') }}" class="col"><h5>Tour Merch</h5></a>
                            <a href="{{ route('store.artist.favorite') }}" class="col"><h5>Favorite</h5></a>
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
