@extends('main.index')

@section('content')
    <div class="content pb-5 bg-white">
        <div class="w-100 col-11 mx-2">
            <div class="col-12  mx-auto">
                <div class="col-12 bg-white position-fixed" style="z-index: 99">
                    <div class="col-7 mt-3 tex d-flex pb-0 pt-2 mx-auto" style="border-bottom: 1px solid #eeeeee">
                        <div class="d-flex col-12 gap-2 text-center ">
                            <a href="{{ route('store.all') }}" class="col active"><h5>All</h5></a>
                            <a href="{{ route('store.album') }}" class="col"><h5>Album</h5></a>
                            <a href="{{ route('store.collection') }}" class="col"><h5>Collection</h5></a>
                            <a href="{{ route('store.merch') }}" class="col"><h5>Merch</h5></a>
                            <a href="{{ route('store.tour.merch') }}" class="col"><h5>Tour Merch</h5></a>
                            <a href="{{ route('store.favorite') }}" class="col"><h5>Favorite</h5></a>
                        </div>
                        {{--                        <div class="col-3">--}}
                        {{--                            <div class="d-flex ms-5 col-12">--}}
                        {{--                                <div class="col-6">--}}
                        {{--                                        <input type="text" />--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-12 row">--}}
                        {{--                                    <input class="col-9 w-75" type="text" />--}}
                        {{--                                    <button class="col-3">Search</button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
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


{{--@extends('main.index')--}}

{{--@section('content')--}}
{{--    <div class="content pb-5 bg-white">--}}
{{--        <div class="w-100 col-11 mx-2">--}}
{{--            <div class="col-12  mx-auto">--}}
{{--                <div class="col-12 bg-white position-fixed" style="z-index: 99">--}}
{{--                    <div class="col-7 mt-3 tex d-flex pb-0 pt-2 mx-auto" style="border-bottom: 1px solid #eeeeee">--}}
{{--                        <div class="d-flex col-12 gap-2 text-center carousel-nav">--}}
{{--                            <a href="{{ route('store.all') }}" class="col active"><h5>All</h5></a>--}}
{{--                            <a href="{{ route('store.album') }}" class="col"><h5>Album</h5></a>--}}
{{--                            <a href="{{ route('store.collection') }}" class="col"><h5>Collection</h5></a>--}}
{{--                            <a href="{{ route('store.merch') }}" class="col"><h5>Merch</h5></a>--}}
{{--                            <a href="{{ route('store.tour.merch') }}" class="col"><h5>Tour Merch</h5></a>--}}
{{--                            <a href="{{ route('store.favorite') }}" class="col"><h5>Favorite</h5></a>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <div class="col-3">--}}
{{--                        --}}{{--                            <div class="d-flex ms-5 col-12">--}}
{{--                        --}}{{--                                <div class="col-6">--}}
{{--                        --}}{{--                                        <input type="text" />--}}
{{--                        --}}{{--                                </div>--}}
{{--                        --}}{{--                                <div class="col-12 row">--}}
{{--                        --}}{{--                                    <input class="col-9 w-75" type="text" />--}}
{{--                        --}}{{--                                    <button class="col-3">Search</button>--}}
{{--                        --}}{{--                                </div>--}}
{{--                        --}}{{--                            </div>--}}
{{--                        --}}{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="container ">--}}
{{--                    <div class="owl-carousel owl-1">--}}
{{--                        <div class="media-29101 d-md-flex w-100 " style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-all-store')--}}
{{--                                --}}{{--                                @include('main.component.store.all-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}

{{--                        <div class="media-29101 d-md-flex w-100" style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-album-store')--}}
{{--                                --}}{{--                                @include('main.component.store.album-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}

{{--                        <div class="media-29101 d-md-flex w-100" style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-collection-store')--}}
{{--                                --}}{{--                                @include('main.component.store.collection-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}

{{--                        <div class="media-29101 d-md-flex w-100" style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-merch-store')--}}
{{--                                --}}{{--                                @include('main.component.store.merch-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}

{{--                        <div class="media-29101 d-md-flex w-100" style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-tour-merch-store')--}}
{{--                                --}}{{--                                @include('main.component.store.tour-merch-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}
{{--                        <div class="media-29101 d-md-flex w-100" style="margin-top: 80px">--}}
{{--                            <div class="row col-12" style="min-height: 100px ; height: 100%">--}}
{{--                                @yield('store-content-fav')--}}
{{--                                --}}{{--                                @include('main.component.store.favorite-store')--}}
{{--                            </div>--}}
{{--                        </div> <!-- .item -->--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        @include('main.component.home.aboutus')--}}

{{--    </div>--}}

{{--@endsection--}}
