@extends('main.index')

@section('content')
    <div class="content bg-white">
        <div class="col-12 w-100 bg-dark py-2 position-relative">
            <div style="height: 400px" class="w-100">
                <img src="{{ asset('assets/img/banner/banner-concert.jpg') }}" style="object-fit: cover"
                     class=" w-100 h-100" alt="banner"/>
            </div>
            <div class="position-absolute " style="top: 40% ; bottom: 60% ; left: 10%">
                <div class="row col-12" style="width: 540px">
                    <div class="col-9 mx-0 px-0">
                        <input class="w-100 mx-2 font-18" placeholder="Search by Artist, Venue Or Event "
                               style="height: 40px;" type="text"/>
                    </div>
                    <div class="col-3 mx-0 px-0">
                        <button class="w-100 btn btn-dark mx-0" style="height: 40px; ">Search</button>
                    </div>
                </div>
                <div class="d-flex mx-0 px-0 my-3">
                    <div class="mx-0 row px-0 d-flex" style="width: 600px">
                        <h6 class="text-white  mx-0  px-0 fw-bolder">TRENDING</h6>
                        <div class="mx-0 px-0">
                            <ul class="list-unstyled px-0 row">
                                <li class="w-25 pe-4 mx-0  text-center">
                                    <div class="bg-dark w-100">
                                        <a class="text-white">BTS</a>
                                    </div>
                                </li>
                                <li class="w-25 text-center">
                                    <div class="bg-dark w-100">
                                        <a class="text-white">Blackpink</a>
                                    </div>
                                </li>
                                <li class="w-25 text-center">
                                    <div class="bg-dark w-100">
                                        <a class="text-white">Seventeen</a>
                                    </div>
                                </li>
                                <li class="w-25 text-center">
                                    <div class="bg-dark w-100">
                                        <a class="text-white">Louis Tomlinson</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-100 col-11 mt-5 mb-2 mx-2">
            <div class="col-10 mx-auto">
                <div class="col-12 mt-4 w-100">
                    <h4 class="fw-bolder">CONCERT</h4>
                    @include('main.component.concert.concert-artist')
                </div>
                <div class="col-12 mt-4 py-3 w-100">
                    <h4 class="fw-bolder">UPCOMING SHOWS</h4>
                    <div class="col-12">
                        @include('main.component.concert.upcoming-show')
                    </div>
                </div>
            </div>
        </div>
    @include('main.component.home.aboutus')

@endsection
