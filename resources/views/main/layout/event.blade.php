@extends('main.index')

@section('content')
    <div class="content pb-5 bg-white">
        <div class="w-100 col-11 mx-2">
            <div class="col-12  mx-auto">
                <div class="col-12 bg-white position-fixed " style="z-index: 99">
                    <div class="col-11 d-flex pb-3 mx-auto" style="border-bottom: 1px solid #eeeeee">
                        <div class="row col-12" style="width: 540px">
                            <div class="col-9 mx-0 px-0">
                                <input class="w-100  font-18" placeholder="Search by Artist, Venue Or Event "
                                       style="height: 40px;" type="text"/>
                            </div>
                            <div class="col-3 mx-0 px-0">
                                <button class="w-100 btn btn-dark mx-0" style="height: 40px; ">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-11 mx-auto" style="padding-top: 80px">
            <div class="col-12 w-100 row">
                <div class="col-3 ">
                    <div class="col-12">
                        <div class="col-11 mx-3" style="border-bottom: 1px solid #eeeeee">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-bolder">FILTER</h6>
                                <p>RESET</p>
                            </div>
                        </div>
                        <div class="mx-0">
                            <div class="col-11">
                                <div class="w-100 py-2 d-flex justify-content-between">
                                    <p class="my-2 mx-4">All</p>
                                    <input class="cursor-pointer" type="radio"/>
                                </div>
                                <div class="w-100 py-2 d-flex justify-content-between">
                                    <p class="my-2 mx-4">Concert</p>
                                    <input class="cursor-pointer" type="radio"/>
                                </div>
                                <div class="w-100 py-2 d-flex justify-content-between">
                                    <p class="my-2 mx-4">Fanmeet</p>
                                    <input class="cursor-pointer" type="radio"/>
                                </div>
                                <div class="w-100 py-2 d-flex justify-content-between">
                                    <p class="my-2 mx-4">Exhibition</p>
                                    <input class="cursor-pointer" type="radio"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3">
                        <div class="col-11 mx-3" style="border-bottom: 1px solid #eeeeee">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-bolder">PRICE RANGE</h6>
                            </div>
                        </div>
                        <div class="mx-0">
                            <div class="col-11 mx-auto">
                                <div class="col-12 my-2 mx-auto">
                                    <input type="range" class="form-range" id="customRange1">
                                    <div class="w-100 py-0 d-flex text-start justify-content-between">
                                        <p class="my-1 mx-0">IDR 0</p>
                                        <p class="my-1 mx-0">IDR 1.500.00+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3">
                        <button class="w-100 btn btn-dark">Save</button>
                    </div>
                </div>
                {{--                <div class="col-1">--}}

                {{--                </div>--}}
                <div class="col-9">
                    <h4 class="fw-bolder">EVENTS</h4>
                    <div class="col-12">
                        <div class="col-12 row">
                            @include('main.component.event.events')
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
        @include('main.component.home.aboutus')

    </div>
@endsection
