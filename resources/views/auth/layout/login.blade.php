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
                        <form id="loginForm" class="row text-start g-3" method="POST" action="{{ route('login.store') }}"  enctype="multipart/form-data">
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
                            <div class="col-12 font-14 pt-0 mt-0 mb-2 text-center"><a href="{{ route('register.all') }}">Doesn't have account? , create your account now!!</a>
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

    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--Password show & hide js -->

    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#loginForm').validate({
                rules: {
                    email: {
                        required : true,
                    },
                    password: {
                        required : true,
                        // min: 8,
                    },
                },
                messages :{
                    email: {
                        required : 'Please Enter Your Email',
                    },
                    password: {
                        required : 'Please Enter Your Password',
                        // min : 'Password at least 8 letter',
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
