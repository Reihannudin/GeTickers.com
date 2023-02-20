@extends('main.index-order')

@section('content')
    <section class="my-0 pb-5 bg-white">
        <div class="col-11 my-0 py-0 mx-auto">
            <div class="col-12 mx-auto">
                @yield('order-content')
            </div>
        </div>
    </section>
@endsection
