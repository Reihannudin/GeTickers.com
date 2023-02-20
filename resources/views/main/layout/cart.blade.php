@extends('main.index-store-artists')

@section('content')
<section class="bg-white pb-5">
    <div class="col-10 mx-auto">
        <div class="py-4">
            <div class="d-flex justify-content-between">
                <h4 class="fw-bolder my-auto">Cart</h4>
                <button class="my-0 btn btn-outline-dark">Remove sold out</button>
            </div>
            <div class="py-3 ">
                <div class="my-1 py-0">
                    <h6 class="my-0 py-0 fw-bolder">There are 3 products in your cart</h6>
                </div>
                <div class="d-flex my-3   py-0 gap-2">
                    <input style=" cursor: pointer" type="radio"/>
                    <h6 class="my-auto">Select all item</h6>
                </div>
                <hr />
            </div>
            <div class="d-flex col-12">
                <input class="me-3" type="radio"/>
                <div class="col-8 d-flex">
                    <div class="" style="width: 80px; height: 70px" >
                        <img class="w-100 h-100" style="object-fit: cover" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
                    </div>
                    <div class="my-auto mx-3">
                        <p class="fw-bolder my-0 ">Official Merch</p>
                        <p class="my-0" style="color: #b7b7b7">Official Merch</p>
                    </div>
                </div>
                <div class="col-2 my-auto">
                    <div class="w-100  gap-3">
                        <button class="bg-white" style="border-radius: 4px;border: 1px solid #EEEEEE">-</button>
                        <span class="mx-3">1</span>
                        <button  class="bg-white" style="border-radius: 4px;border: 1px solid #EEEEEE">+</button>
                    </div>
                </div>
                <div class="col-1 t my-auto">
                    <div class="d-flex ">
                        <p class="my-auto fw-bolder ">$16.07</p>
                    </div>
                </div>
                <div class="col-1 my-auto">
                    <div class="d-flex">
                        <i class="bx bx-x  my-auto font-24"></i>
                    </div>
                </div>
                </div>
                <hr/>
            </div>
            <div class=" py-4 " style="background: rgba(255,241,152,0.57)">
                <div class="col-11 d-flex justify-content-between mx-auto ">
                    <div class="fw-bolder">
                        <h5 class="fw-bolder">Total(1 Item)</h5>
                    </div>
                    <div class="d-flex gap-3">
                        <h5 class="my-auto fw-bolder">$16.72</h5>
                        <button class="btn px-4 btn-dark">Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
