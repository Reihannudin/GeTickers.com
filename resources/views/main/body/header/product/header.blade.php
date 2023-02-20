<nav class="w-100 position-absolute top-0">
    <div class="bg-white position-fixed w-100" style="z-index: 99;">
        <div class="justify-content-between mx-5 align-items-center d-flex" style="height: 80px">
            <div class="d-flex">
                <div style="height: 40px">
                    <img class="h-100" src="{{ asset('assets/img/logo/big-logo.svg') }}" alt="" />
                </div>
                <div class="d-flex pe-2 ms-3  me-2 mt-auto mb-1"  style="border-right: 1px solid #EEEEEE">
                    <div class="d-flex">
                        <div style="height: 25px ; border-radius: 100%">
                            <img src="{{ asset('assets/img/logo/artist/bts-logo.jpg') }}" style="border-radius: 100%"   class="h-100"  alt="" />
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="" style="height: 25px ; border-radius: 100%">
                            <img src="{{ asset('assets/img/icons/global.svg') }}" style="border-radius: 100%" class="h-100"  alt="" />
                        </div>
                    </div>

                </div>
                <div class="d-flex  gap-2 pe-2 me-3 mt-auto mb-1"  style="border-right: 1px solid #EEEEEE">
                    <div class="d-flex ">
                        <div class="d-flex">
                            <div style="height: 25px ; border-radius: 100%">
                                <span>English</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex  gap-2 pe-2 mt-auto mb-1"  style="border-right: 1px solid #EEEEEE">
                    <div class="d-flex ">
                        <div class="d-flex">
                            <div style="height: 25px ; border-radius: 100%">
                                <span>My Wallet : IDR.500.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="height: 0px">
                    <ul class="d-flex align-items-center mx-0 list-unstyled" style="height: 0px; font-size: 16px">
                        <li><a class="cursor-pointer mx-0 text-dark" style="border-right: 1px solid #EEEEEE; padding: 0px 8px" href="{{ route('cart.all') }}">Cart</a></li>
                        <li>
                            <div class="user-box dropdown ms-0" style="height: 36px ; border: none" >
                                <a class="d-flex align-items-center text-dark nav-link dropdown-toggle dropdown-toggle-nocaret" style="border-right: 1px solid #EEEEEE; padding: 0px 8px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Order Shipping
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" style="z-index:99">
                                    <li><a class="dropdown-item py-2  cursor-pointer" style="font-size: 15px" href=""><span style="font-size: 14px">Order History</span></a>
                                    </li>
                                    <li><a class="dropdown-item  py-2 cursor-pointer" style="font-size: 15px"  href=""><span style="font-size: 14px">Returns and Exchanges</span></a>
                                    </li>
                                    <li><a class="dropdown-item  py-2 cursor-pointer" style="font-size: 15px"  href=""><span style="font-size: 14px">Manage Address</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="cursor-pointer mx-0 text-dark" style="border-right: 1px solid #EEEEEE; padding: 0px 8px" href="{{route('store.all')}}">Announcement</a></li>

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
                                <div class="user-box dropdown ms-0" style="height: 40px" >
                                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div >
                                            <div class="d-flex gap-2 align-items-center">
                                                <div style="width: 45px ; height: 45px; border-radius: 100%">
                                                    <img class="w-100 h-100" style="border-radius: 100%" src="{{ asset('assets/img/profile/reihannudin.png') }}" alt="profile"/>
                                                </div>
                                                <p class="my-auto text-dark">{{ auth()->user()->username }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" style="z-index:99">
                                        <li><a class="dropdown-item py-2  cursor-pointer" style="font-size: 16px" href=""><i
                                                    class="bx bx-user"></i><span>Profile</span></a>
                                        </li>
                                        <li><a class="dropdown-item  py-2 cursor-pointer" style="font-size: 16px"  href=""><i
                                                    class="bx bx-shopping-bag"></i><span>My Purchase</span></a>
                                        </li>
                                        <li><a class="dropdown-item  py-2 cursor-pointer" style="font-size: 16px"  href=""><i
                                                    class="bx bx-heart"></i><span>Wishlist</span></a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider mb-0"></div>
                                        </li>
                                        <li>
                                            <form>

                                                <a class="dropdown-item  py-2 cursor-pointer"  style="font-size: 16px"  href="{{ route('logout') }}"><i
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
