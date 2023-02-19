@extends('auth.index')

@section('content-auth')

    <section class="py-4 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image:  url(https://i.pinimg.com/originals/42/af/1d/42af1dff0b45647d4cda561e1aa71695.jpg);">
        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center d-flex-row  h-100">
                <div class="col-7  h-50 ">
                    <div class="card col-12  w-100 shadow">
                        <div class="card-body col-11  mx-auto">
                            <div class="card-title d-flex align-items-center m-0">
                                <div>
                                    <i class="bx bx-arrow-back me-1 font-22 text-black-50"></i>
{{--                                    <i class='bx bxl-facebook-square'></i>--}}
                                </div>
                                <h5 class="mb-0 text-black-50">User Registration</h5>
                                <div class="col-2 ms-auto text-right ">
                                    <img src="{{ asset('assets/img/logo/big-logo.svg') }}" style="width: 130px" class="me-3" alt=""/>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-body">
                                <form id="loginForm" action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 row ">
                                            <div class="col-12 col-md-6 col-lg-6  form-group  col-xl-6 col-xxl-6 ">
                                                <label for="inputEnterFirstname" class="col-sm-3 col-form-label">Firstname</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" style="height: 35px" name="firstname" id="inputEnterFirstname" placeholder="Enter Your Firstname">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6  form-group  col-xl-6 col-xxl-6 ">
                                                <label for="inputEnterLasttname"  class="col-sm-3 col-form-label">Lastname</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" style="height: 35px" name="lastname" id="inputEnterLasstname" placeholder="Enter Your Lasstname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 row ">
                                            <div class="col-12 col-md-6 col-lg-6  form-group  col-xl-6 col-xxl-6 ">
                                                <label for="inputEnterUsername" class="col-sm-3 col-form-label">Username</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" style="height: 35px" id="inputEnterUsername" name="username" placeholder="Enter Your Username">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6  form-group  col-xl-6 col-xxl-6 ">
                                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" style="height: 35px" id="inputPhoneNo2" name="phone_number" placeholder="Phone No">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 row">
                                            <div class="col-12 col-md-6 form-group col-lg-6 col-xl-6 col-xxl-6 ">
                                                <label for="inputEmailAddress2" class="col-sm-5 col-form-label">Email Address</label>
                                                <div class="col-12">
                                                    <input type="email" class="form-control" style="height: 35px" id="inputEmailAddress2" name="email" placeholder="Email Address">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 my-2 col-lg-6 col-xl-6 col-xxl-6 ">

                                                <div class="col-12 form-group">
                                                    <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password" class="form-control border-end-0"
                                                               id="inputChoosePassword" placeholder="Enter Password"> <a
                                                            href="javascript:;" class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 my-2 form-group">
                                                    <label for="inputChoosePassword" class="form-label">Enter Confirmation Password</label>
                                                    <div class="input-group " id="show_hide_password_confirmation">
                                                        <input type="password"  name="password_confirmation" class="form-control border-end-0"
                                                               id="inputChoosePassword" placeholder="Enter Password"> <a
                                                            href="javascript:;" class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 row ">
                                            <div class="col-12  form-group ">
                                                <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                                <div class="col-12">
                                                    <textarea class="form-control col-12" id="inputAddress4" name="address" rows="2" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-0">
                                        <label class="col-sm-5 col-form-label"></label>
                                        <div class="col-12   pb-3 mx-auto">
                                            <button type="submit" class="btn btn-dark col-12  px-5">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--Password show & hide js -->

    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") === "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") === "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });

        $(document).ready(function () {
            $("#show_hide_password_confirmation a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password_confirmation input').attr("type") === "text") {
                    $('#show_hide_password_confirmation input').attr('type', 'password');
                    $('#show_hide_password_confirmation i').addClass("bx-hide");
                    $('#show_hide_password_confirmation i').removeClass("bx-show");
                } else if ($('#show_hide_password_confirmation input').attr("type") === "password") {
                    $('#show_hide_password_confirmation input').attr('type', 'text');
                    $('#show_hide_password_confirmation i').removeClass("bx-hide");
                    $('#show_hide_password_confirmation i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function (){
            $('#loginForm').validate({
                rules: {
                    firstname: {
                        required : true,
                    },
                    lastname: {
                        required : true,
                    },
                    username: {
                        required : true,
                        unique : true,
                        max : 14,
                        min : 3,
                    },
                    phone_number: {
                        required : true,
                    },
                    email: {
                        required : true,
                        unique: true,
                    },
                    password: {
                        required : true,
                        // max : 14,
                        // min : 3,
                    },
                    password_confirmation: {
                        required : true,
                        // min : 8,
                        // max : 14,
                    },
                },
                messages :{
                    email: {
                        required : 'Please Enter Your Email',
                        unique: 'Email already register'
                    },
                    firstname: {
                        required : 'Please Enter Your Firstname',
                    },
                    lastname: {
                        required : 'Please Enter Your Lastname',
                    },
                    username: {
                        required : 'Please Enter Your Username',
                        unique: 'Username already register',
                        max : 'Username max 14 letter',
                        min : 'Username at least 3 letter',
                    },
                    phone_number: {
                        required : 'Please Enter Your Phone Number',
                    },
                    password: {
                        required : 'Please Enter Your Password',
                        min : 'Password at least 8 letter',
                        max : 'Password max 14 letter',
                    },
                    password_confirmation: {
                        required : 'Please Confirmation Your Password',
                        min : 'Password at least 8 letter',
                        max : 'Password max 14 letter',
                    },
                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });

    </script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>



@endsection
