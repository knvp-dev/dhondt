<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}" />

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        
        <div id="app">
            @include('partials.header')
            @yield('content')
            @include('partials.footer')
        </div>

        <!-- scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
    </body>
</html>
