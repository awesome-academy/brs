<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mag - Video &amp; Magazine HTML Template</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    {{ Html::style('/public_asset/style.css') }}

</head>

<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    @include('public.layout.header')

    @yield('content')

    @include('public.layout.footer')

    {{ Html::script(asset('public_asset/js/jquery/jquery-2.2.4.min.js')) }}
    {{ Html::script(asset('public_asset/js/bootstrap/popper.min.js')) }}
    {{ Html::script(asset('public_asset/js/bootstrap/bootstrap.min.js')) }}
    {{ Html::script(asset('public_asset/js/plugins/plugins.js')) }}
    {{ Html::script(asset('public_asset/js/active.js')) }}
</body>

</html>
