@extends('main.index-store-artists')

@section('content')
<section class="bg-white py-5 bg-12">
    <div class="col-11 mx-auto">
        <div class="d-flex col-12 justify-content-between">
            <div class="col-5 mx-auto ">
                <img class="mx-auto" style="width: 85%" src="{{ asset('assets/img/product/photobook/pth-bts-1.png') }}" alt="product image"/>
            </div>
            <div class="col-6 my-4">
                <div class="col-10">
                    <div class="w-100">
                        <h3 >Special 8 Photo-Folio Me, Myself, and RM ‘Entirety’</h3>
                    </div>
                    <div class="w-100 my-3">
                        <h4 class="fw-bolder">IDR.452.000</h4>
                    </div>
                    <hr/>
                </div>
                <div class="col-10">
                    <div class="my-2">
                        <h6 class="py-2">Special 8 Photo-Folio Me, Myself, and RM ‘Entirety’</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="w-100 gap-3">
                            <button class="bg-white" style="border-radius: 4px;border: 1px solid #EEEEEE">-</button>
                            <span class="mx-3">1</span>
                            <button  class="bg-white" style="border-radius: 4px;border: 1px solid #EEEEEE">+</button>
                        </div>
                        <div>
                            <p>IDR.452.000</p>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="col-10">
                    <div class="d-flex gap-2" style="color: #bbbbbb">
                        <i class="bx bx-info-circle"></i>
                        <p>You can order up to 7 items.</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p style="font-size: 18px">Total (1 item)</p>
                        </div>
                        <div class="my-2" style="font-size: 16px">
                            <h6>$30.65</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2 col-10 justify-content-between">
                    <div class="col-6">
                        <button class="btn w-100 btn-outline-dark py-3">Add To Cart</button>
                    </div>
                    <div class="col-6">
                        <button  class="btn w-100 btn-dark py-3">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5" />
    </div>
    <div class="col-10 d-flex mx-auto">
        <div class="col-4">
            <h5 class="fw-bolder my-4">Shipping</h5>
            <div class="d-flex">
                <div class="mx-3 font-20">
                    <i class="bx bx-car"></i>
                </div>
                <div class="font-18">
                    <p class="my-0 py-0" style="font-size: 16px">Country/region · Shipping fee</p>
                    <p class="my-0 py-0" style="color: #838383 ; font-size: 16px">Add a shipping address to check shipping fee.</p>
                </div>
            </div>
            <hr />
            <div class="col-12 mx-auto">
                <div class="py-3 ">
                    <p class="fw-bolder">[Purchase Notice]</p>
                    <ul class="text-danger ps-4">
                        <li><p class="text-dark">You can buy up to 7.</p></li>
                        <li><p class="text-dark">This product is shipped for free from Mon. February 13, 2023, 10:00 AM - Mon. February 27, 2023, 9:59 AM (KST). (only available in South Korea.)</p></li>
                        <li><p class="text-dark">As more countries/regions are experiencing shipping delays and imposing shipping restrictions due to COVID-19, shipping to the country/region you selected may be unavailable. Please check the announcement on shipping delay and restriction. We will do our best to resume shipping as soon as possible.</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-7 ms-auto">
            <h5 class="fw-bolder my-4">Information</h5>
            <div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Product Name</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>Special 8 Photo-Folio Me, Myself, and RM ‘Entirety’</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Release date</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>2022.09.05</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Contents</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>See product details</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Manufacturer</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>플레이 컴퍼니</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Country of manufacture</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>KOREA</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Period of use</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>Not Applicable</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Quality assurance standards</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>In accordance with relevant laws and the criteria for the settlement of consumer disputes</span>
                    </div>
                </div>
                <div class="col-12 gap-3 d-flex" style="border-top: 1px solid #eeecec">
                    <div class="col-2 py-2 ps-1 pe-0" style="background: rgba(246,246,246,0.68)">
                        <span>Customer service</span>
                    </div>
                    <div class="col-8 my-auto">
                        <span>GeTickers Store Customer Center : 1544-0790</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-4 mb-4 col-10 mx-auto"/>
    <div class="content col-12 mx-auto pt-0">
        <div class="col-11 mx-auto">
            <div class="site-section bg-left-half ">
                <div class="container-fluid owl-2-style">
                    <div class="mx-0 w-100">
                        <div class="col-12">
                            <h4 class="py-3">Another Merchandise</h4>
                            <div class="owl-carousel owl-3">
                                <div class="media-29101">
                                    <div class="col-12 mx-4 " style="width: 230px; height: 350px; border-radius: 12px 0px 12px 0px">
                                        <div class="col-12 d-block justify-content-between w-100 mx-0 px-0 pt-0" >
                                            <div class="">
                                                <a href="#">
                                                    <div class="col-12">
                                                        <img src="{{ asset('assets/img/product/merch-2-bp.webp') }}" style="height:200px ;border-radius: 12px 0px 0px 0px ; object-fit: cover" class="w-100" alt="image" />
                                                    </div>
                                                </a>
                                                <div class="my-0 card-body mx-0">
                                                    <h6 class="my-0 py-0 fw-bolder">PINK VENOM T-shirt</h6>
                                                    <p class="my-0 py-0 fw-normal">Rp.450.000</p>
                                                    <span class="my-0 py-0 text-dark ">Blackpink</span>
                                                </div>
                                            </div>
                                            <div class="position-absolute " style="bottom: 2%">
                                                <div class="d-flex mx-1 gap-2">
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-outline-dark px-5">Order
                                                    </button>
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-dark px-3">Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-29101">
                                    <div class="col-12 mx-4 " style="width: 230px; height: 350px; border-radius: 12px 0px 12px 0px">
                                        <div class="col-12 d-block justify-content-between w-100 mx-0 px-0 pt-0" >
                                            <div class="">
                                                <a href="#">
                                                    <div class="col-12">
                                                        <img src="{{ asset('assets/img/product/merch-2-rm.png') }}" style="height:200px ;border-radius: 12px 0px 0px 0px ; object-fit: cover" class="w-100" alt="image" />
                                                    </div>
                                                </a>
                                                <div class="my-0 card-body mx-0">
                                                    <h6 class="my-0 py-0 fw-bolder">Diary & Pencil Set</h6>
                                                    <p class="my-0 py-0 fw-normal">Rp.250.000</p>
                                                    <span class="my-0 py-0 text-dark ">RM</span>
                                                </div>
                                            </div>
                                            <div class="position-absolute " style="bottom: 2%">
                                                <div class="d-flex mx-1 gap-2">
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-outline-dark px-5">Order
                                                    </button>
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-dark px-3">Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-29101">
                                    <div class="col-12 mx-4 c" style="width: 230px; height: 350px; border-radius: 12px 0px 12px 0px">
                                        <div class="col-12 d-block justify-content-between w-100 mx-0 px-0 pt-0" >
                                            <div class="">
                                                <a href="#">
                                                    <div class="col-12">
                                                        <img src="{{ asset('assets/img/product/merch-1-rm.png') }}" style="height:200px ;border-radius: 12px 0px 0px 0px ; object-fit: cover" class="w-100" alt="image" />
                                                    </div>
                                                </a>
                                                <div class="my-0 card-body mx-0">
                                                    <h6 class="my-0 py-0 fw-bolder">Denim Shirt</h6>
                                                    <p class="my-0 py-0 fw-normal">Rp.1.150.000</p>
                                                    <span class="my-0 py-0 text-dark ">RM</span>
                                                </div>
                                            </div>
                                            <div class="position-absolute " style="bottom: 2%">
                                                <div class="d-flex mx-1 gap-2">
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-outline-dark px-5">Order
                                                    </button>
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-dark px-3">Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-29101">
                                    <div class="col-12 mx-4 " style="width: 230px; height: 350px; border-radius: 12px 0px 12px 0px">
                                        <div class="col-12 d-block justify-content-between w-100 mx-0 px-0 pt-0" >
                                            <div class="">
                                                <a href="#">
                                                    <div class="col-12">
                                                        <img src="{{ asset('assets/img/product/merch-1-svt.png') }}" style="height:200px ;border-radius: 12px 0px 0px 0px ; object-fit: cover" class="w-100" alt="image" />
                                                    </div>
                                                </a>
                                                <div class="my-0 card-body mx-0">
                                                    <h6 class="my-0 py-0 fw-bolder">Be The Sun Zip Up Hoodie (Black)</h6>
                                                    <p class="my-0 py-0 fw-normal">Rp.1.250.000</p>
                                                    <span class="my-0 py-0 text-dark ">Seventeen</span>
                                                </div>
                                            </div>
                                            <div class="position-absolute " style="bottom: 2%">
                                                <div class="d-flex mx-1 gap-2">
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-outline-dark px-5">Order
                                                    </button>
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-dark px-3">Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-29101">
                                    <div class="col-12 mx-4 " style="width: 230px; height: 350px; border-radius: 12px 0px 12px 0px">
                                        <div class="col-12 d-block justify-content-between w-100 mx-0 px-0 pt-0" >
                                            <div class="">
                                                <a href="#">
                                                    <div class="col-12">
                                                        <img src="{{ asset('assets/img/product/merch-2-svt.png') }}" style="height:200px ;border-radius: 12px 0px 0px 0px ; object-fit: cover" class="w-100" alt="image" />
                                                    </div>
                                                </a>
                                                <div class="my-0 card-body mx-0" >
                                                    <h6 class="my-0 py-0 fw-bolder">Be The Sun Reversible Bucket Hat (Black)</h6>
                                                    <p class="my-0 py-0 fw-normal">Rp.650.000</p>
                                                    <span class="my-0 py-0 text-dark ">Seventeen</span>
                                                </div>
                                            </div>
                                            <div class="position-absolute " style="bottom: 2%">
                                                <div class="d-flex mx-1 gap-2">
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-outline-dark px-5">Order
                                                    </button>
                                                    <button type="submit"
                                                            class="cursor-pointer btn btn-dark px-3">Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-10 mx-auto">
        <div class="my-3 col-10 py-3">
            <h5 class="my-3 py-2 fw-bolder">About Return and Exchange</h5>
            <div class="">
                <div class="my-2">
                    <h6 class="fw-bolder">Return & Exchange Request</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">You can request return or exchange by going to My > My Orders > Order Details OR by checking our FAQ.</p></li>
                    </ul>
                </div>
                <div class="my-2">
                    <h6 class="fw-bolder">Return & Exchange Period</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">Return & exchange requests must be made within 7 days of receiving the order.</p></li>
                        <li><p style="font-size: 16px">If the order was processed differently from what was originally listed or advertised, or from the terms and conditions, customers can request either returns or exchanges within 3 months of receiving the order.</p></li>
                        <li><p style="font-size: 16px">(If the customer change of mind, the customer is not eligible for exchanges, but can cancel the purchase by returning the product.)</p></li>
                    </ul>
                </div>
                <div class="my-2">
                    <h6 class="fw-bolder">Return & Exchange Cost</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">If the customer wants to return the product(s) due to a change of mind, the customer is responsible for and must pay the shipping fee to send the product(s) back for return.</p></li>
                        <li><p style="font-size: 16px">In case of returns due to product defects, wrong delivery, or shipping issues, the seller is responsible for and must pay the shipping fee for the product(s) returned.</p></li>
                    </ul>
                </div>
                <div class="my-2">
                    <h6 class="fw-bolder">Refund Conditions</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">We reserve the right to deny returns due to a change of mind or in case of opened product(s).</p></li>
                        <li><p style="font-size: 16px">We reserve the right to deny returns if the value of product(s) is deemed to be depreciated due to any trace of product usage, removal or label or tags, or disposal of product box or wrapping.</p></li>
                        <li><p style="font-size: 16px">You can exchange your order only with the identical merch with identical options. If not, you must re-order after returning your order.</p></li>
                        <li><p style="font-size: 16px">We cannot exchange your order even when you apply for it when the seller does not have stocks. If you apply for an exchange when the seller does not have stocks, we cancel your order and make a refund by the payment method you chose when placing an order.</p></li>
                    </ul>
                </div>
                <div class="my-2">
                    <h6 class="fw-bolder">Compensation for Consumer Damages and Refund Delays</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">Return & exchange requests must be made within 7 days of receiving the order.</p></li>
                        <li><p style="font-size: 16px">If the order was processed differently from what was originally listed or advertised, or from the terms and conditions, customers can request either returns or exchanges within 3 months of receiving the order.</p></li>
                        <li><p style="font-size: 16px">(If the customer change of mind, the customer is not eligible for exchanges, but can cancel the purchase by returning the product. As for door-to-door delivery via DHL, a claim can be filed within 30 days after the order has been shipped out. Please note that after 30 days as mentioned above, you may not be able to file a claim.)</p></li>
                    </ul>
                </div>
                <div class="my-2">
                    <h6 class="fw-bolder">For international customers</h6>
                    <ul class="my-2 py-2">
                        <li><p style="font-size: 16px">Some of the policy above are only applicable to customers in South Korea. For international customers, please check FAQ to find more details about return and exchange policy for international orders.</p></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
