@extends('main.index-profile')

@section('content')
    <section class="bg-white">
        <div class="col-10 mx-auto">
            <div class="col-12 text-start fw-bolder pt-3">
                <h3 class="fw-bolder">My Purchase</h3>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class=" my-auto" style="font-weight: 550">All product you purchase</h6>
                <div class="d-flex mx-3">
                    <i class="bx font-24 bx-filter"></i>
                    <p class="font-18 my-auto">All</p>
                </div>
            </div>
            <hr/>
            <div class="col-12">
                <div>
                    <ul class="nav nav-tabs navbar-dark" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#primaryall" role="tab"
                               aria-selected="true">
                                <div class="d-flex align-items-center text-center" style="width: 100px">
                                    <div class="tab-title" style="width: 100px">All</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primarysuccess" role="tab"
                               aria-selected="false">
                                <div class="d-flex align-items-center text-center" style="width: 100px">

                                    <div class="tab-title" style="width: 100px">Success</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primarypending" role="tab"
                               aria-selected="false">
                                <div class="d-flex align-items-center text-center" style="width: 100px">

                                    <div class="tab-title" style="width: 100px">Pending</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primaryfailed" role="tab"
                               aria-selected="false">
                                <div class="d-flex align-items-center text-center" style="width: 100px">

                                    <div class="tab-title" style="width: 100px">Failed</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active" id="primaryall" role="tabpanel">
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="primarysuccess" role="tabpanel">
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="primarypending" role="tabpanel">
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="primaryfailed" role="tabpanel">
                            <div class="col-12 pb-2">
                                <div class="d-flex col-12">
                                    <div class="col-6 d-flex">
                                        <div class="" style="width: 80px; height: 70px" >
                                            <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                                        </div>
                                        <div class="my-auto mx-3">
                                            <p class="fw-bolder my-0 ">Official Merch</p>
                                            <p class="my-0" style="color: #b7b7b7; font-size: 14px">Official Merch</p>
                                            <spam class="my-0 ">x2</spam>
                                        </div>
                                    </div>
                                    <div class="col-2  my-auto">
                                        <div class="d-flex w-100 me-auto">
                                            <p class="my-auto fw-bolder ">IDR.450.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  mx-auto text-center my-auto">
                                        <div class="d-flex w-100 ">
                                            <p class="my-auto fw-bolder ">IDR.50.000</p>
                                        </div>
                                    </div>
                                    <div class="col-2  ms-5 my-auto">
                                        <div class="d-flex w-100 text-end ">
                                            <p class="my-auto fw-bolder ">IDR.950.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3 d-flex">
                                    <div class="d-flex col-12">
                                        <div class="col-10 my-auto">
                                            <i class="bx bxs-truck"></i>
                                            <span>Pesanan sudah sampai Transit 1 Korea</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <button type="button" class="btn btn-dark">
                                                Confirm Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
