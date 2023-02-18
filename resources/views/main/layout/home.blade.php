@extends('main.index')

@section('content')
    <div class="col-12 bg-white">
        <div>
            @include('main.component.home.banner')
            @include('main.component.home.partner')
            <div class="w-100 pt-0 pb-0 my-0">
                <div class="col-12">
                    <div class="mx-auto w-75">
                        <hr/>
                    </div>
                    @include('main.component.home.store')
                    @include('main.component.home.slidecard')
                    @include('main.component.home.merchslide')
                </div>
            </div>
            @include('main.component.home.aboutus')
        </div>
@endsection
