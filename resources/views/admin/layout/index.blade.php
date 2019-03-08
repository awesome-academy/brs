<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin">
    <meta name="author" content="">

    <title>@lang('content.admin')</title>
    {{ Html::style('admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('admin_asset/bower_components/metisMenu/dist/metisMenu.min.css') }}
    {{ Html::style('admin_asset/dist/css/sb-admin-2.css') }}
    {{ Html::style('admin_asset/bower_components/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}
    {{ Html::style('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}
    {{ Html::style('admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css') }}
    {{ Html::style('admin_asset/css/app.css') }}
</head>

<body>

    <div id="wrapper">

        @include('admin.layout.header')

        @yield('content')

    </div>
    {{ Html::script(asset('admin_asset/bower_components/jquery/dist/jquery.min.js')) }}
    {{ Html::script(asset('admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js')) }}
    {{ Html::script(asset('admin_asset/bower_components/metisMenu/dist/metisMenu.min.js')) }}
    {{ Html::script(asset('admin_asset/dist/js/sb-admin-2.js')) }}
    {{ Html::script(asset('admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js')) }}
    {{ Html::script(asset('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')) }}
    {{ Html::script(asset('admin_asset/js/example.js')) }}
</body>

</html>
