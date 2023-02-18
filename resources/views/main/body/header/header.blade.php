<nav class="w-100 position-absolute top-0">
    <div class="bg-white position-fixed w-100" style="z-index: 99;">
        <div class="justify-content-between mx-5 align-items-center d-flex" style="height: 80px">
            <div >
                <div style="height: 40px">
                    <img class="h-100" src="{{ asset('assets/img/logo/big-logo.svg') }}" alt="" />
                </div>
            </div>
            <div>
                <div style="height: 0px">
                    <ul class="d-flex align-items-center font-18 list-unstyled gap-4" style="height: 0px">
                        <li><a class="cursor-pointer text-dark" href="{{ route('home.all') }}">Home</a></li>
                        <li><a class="cursor-pointer text-dark" href="{{ route('concert.all') }}">Concert</a></li>
                        <li><a class="cursor-pointer text-dark" href="{{route('store.all')}}">Store</a></li>
                        <li><a class="cursor-pointer text-dark" href="{{ route('events.all') }}">Events</a></li>
                        <li>
                            <button type="submit"
                                    class="cursor-pointer btn btn-outline-dark px-5">Sign Up
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
