<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
{{--    <link rel="icon" href="{{ asset('assets/images/icons/T.svg') }}" type="image/png" />--}}

    {{--    <!-- Fonts -->--}}
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="{{ asset('assets/img/logo/small-logo.svg') }}" type="image/png" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lato:ital,wght@0,300;0,400;0,700;1,300&family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Roboto:ital,wght@0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/icons/T.svg') }}" type="image/png" />

    <link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>TopUpYuk | Auth</title>
</head>
<style>
    *{
        font-family: 'Electrolize', sans-serif;
    }
</style>
<body class="h-100">
<div class="h-100">
    <!--wrapper-->
    <div class="wrapper mx-auto " style="max-width: 1500px;">
            <!--start page wrapper -->
            <div class="col-12" >
                @yield('content-auth')
            </div>
    </div>
</div>

<div class="overlay toggle-icon"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/validate.min.js') }}"></script>

<!--app JS-->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--<script src="{{ asset('assets/js/code.js') }}"></script>--}}
<script src="{{ asset('assets/js/validate.min.js') }}"></script>

<script src="{{ asset('assets/plugins/input-tags/js/tagsinput.js') }}"></script>
<script src="https://kit.fontawesome.com/9253957e17.js" crossorigin="anonymous"></script>

</body>

</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Auth</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}
{{--    <link rel="icon" href="{{ asset('assets/img/logo/small-logo.svg') }}" type="image/png" />--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lato:ital,wght@0,300;0,400;0,700;1,300&family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Roboto:ital,wght@0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">--}}

{{--    <!-- Boxicons CSS -->--}}
{{--    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>--}}
{{--    <link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />--}}
{{--    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">--}}
{{--    <!-- Theme Style CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}


{{--    <style>--}}
{{--        *{--}}
{{--            font-family: 'Electrolize', sans-serif;--}}
{{--        }--}}
{{--        body {--}}
{{--            /*font-family: 'Nunito', sans-serif;*/--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<!--start page wrapper -->--}}
{{--<div class="col-12" >--}}
{{--    @yield('content-auth')--}}
{{--</div>--}}



{{--<!-- Option 1: Bootstrap Bundle with Popper -->--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/popper.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}
{{--<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">--}}
{{--</script>--}}
{{--</body>--}}

