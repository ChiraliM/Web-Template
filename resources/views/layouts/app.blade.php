<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web Template</title>

    <link rel="manifest" href="{{ url( 'manifest.json' ) }}">

    <link href="{{ mix( '/css/app.css' ) }}" type="text/css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbarTransparent">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        @yield( 'header-content' )
    </nav>
    @yield( 'content' )


    @include( 'web.footer' )
        {{--@include( 'web.partials.footer-secondary' )--}}

</div>



@stack( 'footer-scripts' )
</body>
</html>
