@extends('main.index-profile')
@section('content')
    <div class="col-10  col-sm-11 mx-auto ">
        <div class="row ">
            <div class="col-4">
                <div class="col-12">
                    <div class="bg-white my-4 justify-content-between d-flex py-2 px-3" style="border-radius: 6px">
                        <div>
                            <p class="my-0">Getickers Wallet</p>
                            <div class="my-0">
                                <h5 class="my-0">IDR.1.400.000</h5>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div class="my-auto px-2 py-1" style="border-radius: 8px; background: rgba(36,40,45,0.84)">
                                <a href="" class="text-white">
                                    <i class="bx font-22 bx-add-to-queue"></i>
                                </a>
                            </div>
                            <div class="my-auto px-2 py-1" style="border-radius: 8px; background: rgba(36,40,45,0.84)">
                                <a href="" class="text-white">
                                    <i class="bx font-22 bx-transfer"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white my-4 justify-content-between d-flex py-2 px-3" style="border-radius: 6px">
                        <div>
                            <h5 class="my-0 my-2 fw-bolder">Shipping Address</h5>
                            <div class="my-0 my-3">
                                <div class="d-flex gap-2">
                                    <h6 class="my-0">Andrian Raihannudin</h6>
                                    <div class="px-2 my-auto " style="; border: 1px solid  rgba(36,40,45,0.84) ;height: 23px ;border-radius: 24px">
                                        <span style="font-size: 12px" class="text-dark">DEFAULT</span>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p class="my-0 py-0" style="font-size: 13px">Grand catania block O5/39, Ciakar, Panongan,Kab.Tangerang,Banten kab.Tangerang, Banten
                                        15710
                                    </p>
                                    <div class="col-12 row">
                                        <div class="col-7">
                                            <p class="my-0 py-0" style="font-size: 13px">Indonesia</p>
                                            <p class="my-0 py-0" style="font-size: 13px">+62 87773301182</p>
                                        </div>
                                        <div class="col-4 mx-2">
                                            <div class="d-flex text-end gap-2">
                                                <div>
                                                    <button type="button" class="btn font-13 btn-outline-dark">Edit</button>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn font-13 btn-outline-dark">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="col-12">
                                    <div class="d-flex gap-2" style="color: #858585">
                                        <i class="bx bx-info-circle"></i>
                                        <p>You can add up to 10 shipping addresses.</p>
                                    </div>
                                    <div class="col-12">
                                        <button class="w-100 btn btn-dark">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="col-12">
                    <div class="col-12 col-sm-11 my-4 mx-auto ">
                        <div class="col-12">
                            <div class="px-4 shadow-none ">
                                <div class="row ">
                                    <div class=" col-lg-12 col-md-12 order-xxl-1 order-lg-1 order-md-2 order-sm-2 order-2 bg-white "
                                         style="border-radius: 8px">
                                        <div class="col-12">
                                            <div class="py-2 mt-2 mb-4" style="border-bottom: 1px solid #eeebeb">
                                                <h6>User Information</h6>
                                            </div>
                                            <div>
                                                <ul class="nav nav-tabs navbar-dark" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                                                           aria-selected="true">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Information</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab"
                                                           aria-selected="false">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Pin Security</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content py-3">
                                                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                                        <form method="POST" action="">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input name="username" class="form-control" disabled
                                                                       value="" type="text"
                                                                       id="username">
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-6">
                                                                    <label for="firstname" class="form-label">Firstname</label>
                                                                    <input name="firstname" class="form-control"
                                                                           value="" type="text"
                                                                           id="firstname">
                                                                </div>
                                                                <div class="mb-3 col-6">
                                                                    <label for="lastname" class="form-label">Lastname</label>
                                                                    <input name="lastname" class="form-control"
                                                                           value="" type="text"
                                                                           id="lastname">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-2 col-6">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input name="email" class="form-control" disabled
                                                                           value="" type="text"
                                                                           id="email">
                                                                </div>
                                                                <div class="mb-2 col-6">
                                                                    <label for="phone_number" class="form-label">Phone Number</label>
                                                                    <input name="phone_number" class="form-control"
                                                                           value="" type="text"
                                                                           id="phone_number">
                                                                </div>
                                                                <span class="mb-2" style="font-size: 11px">Jika anda merubah email, maka di perlukan verifikasi ulang. harap teliti dalam mengisi email.</span>
                                                            </div>
                                                            <hr/>
                                                            <div class="mb-3 mx-2 d-flex justify-content-center gap-2">
                                                                <div class="col-6 ">
                                                                    <button type="submit"
                                                                            class="cursor-pointer col-12 my-1 btn btn-outline-dark px-5">Save
                                                                        changes
                                                                    </button>
                                                                </div>
                                                                <form>
                                                                    <div class="col-6">
                                                                        <a href="">
                                                                            <button type="button"
                                                                                    class=" cursor-pointer btn col-12 my-1 btn-outline-danger px-4">
                                                                                Log Out
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                                        <form method="POST" id="loginForm"
                                                              action="">
                                                            @csrf
                                                            <div class="mb-3 form-group">
                                                                <label for="old_password" class="form-label">Old Password</label>
                                                                <input name="old_password" class="form-control" type="password"
                                                                       id="old_password">
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="password" class="form-label">New Password</label>
                                                                <input name="password" class="form-control" type="password"
                                                                       id="password">
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="password_confirmation" class="form-label">Confirm
                                                                    Password</label>
                                                                <input name="password_confirmation" class="form-control" value=""
                                                                       type="password"
                                                                       id="password_confirmation">
                                                            </div>
                                                            <hr/>
                                                            <div class="mb-3">
                                                                <div class="col-12">
                                                                    <button type="submit"
                                                                            class="cursor-pointer col-12 my-1 btn btn-dark px-5">Save
                                                                        a new password
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </form>
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
    </div>
@endsection
