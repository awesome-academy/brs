<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@lang('content.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{ Html::style('/business_asset/css/font-awesome.min.css') }}
    {{ Html::style('/business_asset/css/ionicons.min.css') }}
    {{ Html::style('/business_asset/css/linearicons.css') }}
    {{ Html::style('/business_asset/css/nice-select.css') }}
    {{ Html::style('/business_asset/css/jquery.fancybox.css') }}
    {{ Html::style('/business_asset/css/jquery-ui.min.css') }}
    {{ Html::style('/business_asset/css/meanmenu.min.css') }}
    {{ Html::style('/business_asset/css/nivo-slider.css') }}
    {{ Html::style('/business_asset/css/owl.carousel.min.css') }}
    {{ Html::style('/business_asset/css/bootstrap.min.css') }}
    {{ Html::style('/business_asset/css/default.css') }}
    {{ Html::style('/business_asset/style.css') }}
    {{ Html::style('/business_asset/css/responsive.css') }}
    {{ Html::style('/business_asset/js/vendor/modernizr-3.5.0.min.js') }}
    <link rel="shortcut icon" href="/business_asset/img/favicon.ico">
</head>

<body>

    <div class="wrapper">

        @include('business.layouts.header')

        @yield('content')

        @include('business.layouts.footer')

    </div>

    {{ Html::script(asset('business_asset/js/vendor/jquery-3.2.1.min.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.countdown.min.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.meanmenu.min.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.scrollUp.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.nivo.slider.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.fancybox.min.js')) }}
    {{ Html::script(asset('business_asset/js/jquery.nice-select.min.js')) }}
    {{ Html::script(asset('business_asset/js/jquery-ui.min.js')) }}
    {{ Html::script(asset('business_asset/js/owl.carousel.min.js')) }}
    {{ Html::script(asset('business_asset/js/popper.min.js')) }}
    {{ Html::script(asset('business_asset/js/bootstrap.min.js')) }}
    {{ Html::script(asset('business_asset/js/plugins.js')) }}
    {{ Html::script(asset('business_asset/js/main.js')) }}

</body>

</html>
