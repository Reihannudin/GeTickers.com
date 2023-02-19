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
                        @if(is_null(auth()->user()))
                            <li>
                                <a href="{{ route('login.all') }}">
                                    <button type="submit"
                                            class="cursor-pointer btn btn-outline-dark px-5">Sign Up
                                    </button>
                                </a>
                            </li>
                        @elseif(auth()->user()->id)
                            <li>
                                    <div class="user-box dropdown">
                                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div >
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div style="width: 50px ; height: 50px; border-radius: 100%">
                                                        <img class="w-100 h-100" style="border-radius: 100%" src="{{ asset('assets/img/profile/reihannudin.png') }}" alt="profile"/>
                                                    </div>
                                                    <p class="my-auto text-dark">{{ auth()->user()->username }}</p>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end" style="z-index:99">
                                            <li><a class="dropdown-item py-2 cursor-pointer" href=""><i
                                                        class="bx bx-user"></i><span>Profile</span></a>
                                            </li>
                                            <li><a class="dropdown-item  py-2 cursor-pointer" href=""><i
                                                        class="bx bx-shopping-bag"></i><span>My Purchase</span></a>
                                            </li>
                                            <li><a class="dropdown-item  py-2 cursor-pointer" href=""><i
                                                        class="bx bx-heart"></i><span>Wishlist</span></a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider mb-0"></div>
                                            </li>
                                            <li>
                                                <form>

                                                    <a class="dropdown-item  py-2 cursor-pointer" href="{{ route('logout') }}"><i
                                                            class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
{{--@php--}}
{{--    dd(auth()->user()->firstname)--}}
{{--@endphp--}}
