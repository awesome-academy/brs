<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/core-img/favicon.ico">
    {{ Html::style('/public_asset/style.css') }}

</head>

<body>
    <h3>@lang('content.wellcome') {{ $data['mail'] }}</h3>
    <h3>@lang('content.tks')</h3>
    <h3>@lang('content.book') <h1>{{ $data['book_title'] }}</h1> @lang('content.processed')</h3>
</body>

</html>
