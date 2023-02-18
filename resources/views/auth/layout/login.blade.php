@extends('auth.index')

@section('content-auth')

    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image:  url(https://i.pinimg.com/originals/42/af/1d/42af1dff0b45647d4cda561e1aa71695.jpg);">
    <div class="container-fluid">
        <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-5  h-50 ">
                <div class="card col-12 pb-4 w-100 shadow">
                    <div class="card-body col-11  mx-auto">
                        <h4 class="card-title mt-3 text-center">Login to Your Account</h4>
                        <p class="text-center">Hey there! Welcome back.</p>
                        <form id="loginForm" class="row text-start g-3" method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 form-group">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <input type="email" name=email class="form-control" id="inputEmailAddress"
                                       placeholder="Email Address">
                            </div>
                            <div class="col-12 form-group">
                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="password" class="form-control border-end-0"
                                           id="inputChoosePassword" placeholder="Enter Password"> <a
                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                            class='bx bx-hide'></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 my-md-3 my-0 my-sm-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                           id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                        Me</label>
                                </div>
                            </div>
                            <div class="col-md-6 text-end"><a href="">Forgot
                                    Password ?</a>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark"><i
                                            class="bx bxs-lock-open"></i>Sign in
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
