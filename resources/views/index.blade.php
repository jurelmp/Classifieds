<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    {{--Styles--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<div class="row">
    <div class="medium-6 columns">
        <h2>Our Agency, our selves.</h2>
        <p>
            Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor.
        </p>
    </div>
    <div class="medium-6 columns">
        <img class="thumbnail" src="https://placehold.it/750x350" alt="Thumbnail">
    </div>
</div>

</body>

{{--Compressed JavaScript--}}
<script src="{{ mix('js/app.js') }}"></script>
</html>