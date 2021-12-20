<!doctype html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>ASSURANCES LYAZIDI</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="/assets/unnamed.png" type="image/png">

        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="/assets/assets/css/animate.css">

        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="/assets/assets/css/LineIcons.2.0.css">

        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="/assets/assets/css/bootstrap-4.5.0.min.css">

        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="/assets/assets/css/default.css">

        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="/assets/assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{--<link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    @livewireStyles
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
{{--    <style>--}}
{{--        :root {--}}
{{--            --body-bg: rgb(204, 204, 204);--}}
{{--            --white: #ffffff;--}}
{{--            --darkWhite: #ccc;--}}
{{--            --black: #000000;--}}
{{--            --dark: #615c60;--}}
{{--            --themeColor: #22b8d1;--}}
{{--            --pageShadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);--}}
{{--        }--}}

{{--        /* Font Include */--}}
{{--        @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');--}}

{{--        body {--}}
{{--            background-color: var(--body-bg);--}}
{{--        }--}}

{{--        .page {--}}
{{--            background: var(--white);--}}
{{--            display: block;--}}
{{--            margin: 0 auto;--}}
{{--            position: relative;--}}
{{--            box-shadow: var(--pageShadow);--}}
{{--        }--}}

{{--        .page[size="A4"] {--}}
{{--            width: 21cm;--}}
{{--            height: 29.7cm;--}}
{{--            overflow: hidden;--}}
{{--        }--}}

{{--        .bb {--}}
{{--            border-bottom: 3px solid var(--darkWhite);--}}
{{--        }--}}

{{--        /* Top Section */--}}
{{--        .top-content {--}}
{{--            padding-bottom: 15px;--}}
{{--        }--}}

{{--        .logo img {--}}
{{--            height: 60px;--}}
{{--        }--}}

{{--        .top-left p {--}}
{{--            margin: 0;--}}
{{--        }--}}

{{--        .top-left .graphic-path {--}}
{{--            height: 40px;--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        .top-left .graphic-path::before {--}}
{{--            content: "";--}}
{{--            height: 20px;--}}
{{--            background-color: var(--dark);--}}
{{--            position: absolute;--}}
{{--            left: 15px;--}}
{{--            right: 0;--}}
{{--            top: -15px;--}}
{{--            z-index: 2;--}}
{{--        }--}}

{{--        .top-left .graphic-path::after {--}}
{{--            content: "";--}}
{{--            height: 22px;--}}
{{--            width: 17px;--}}
{{--            background: var(--black);--}}
{{--            position: absolute;--}}
{{--            top: -13px;--}}
{{--            left: 6px;--}}
{{--            transform: rotate(45deg);--}}
{{--        }--}}

{{--        .top-left .graphic-path p {--}}
{{--            color: var(--white);--}}
{{--            height: 40px;--}}
{{--            left: 0;--}}
{{--            right: -100px;--}}
{{--            text-transform: uppercase;--}}
{{--            background-color: var(--themeColor);--}}
{{--            font: 26px;--}}
{{--            z-index: 3;--}}
{{--            position: absolute;--}}
{{--            padding-left: 10px;--}}
{{--        }--}}

{{--        /* User Store Section */--}}
{{--        .store-user {--}}
{{--            padding-bottom: 25px;--}}
{{--        }--}}

{{--        .store-user p {--}}
{{--            margin: 0;--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        .store-user .address {--}}
{{--            font-weight: 400;--}}
{{--        }--}}

{{--        .store-user h2 {--}}
{{--            color: var(--themeColor);--}}
{{--            font-family: 'Rajdhani', sans-serif;--}}
{{--        }--}}

{{--        .extra-info p span {--}}
{{--            font-weight: 400;--}}
{{--        }--}}

{{--        /* Product Section */--}}
{{--        thead {--}}
{{--            color: var(--white);--}}
{{--            background: var(--themeColor);--}}
{{--        }--}}

{{--        .table td,--}}
{{--        .table th {--}}
{{--            text-align: center;--}}
{{--            vertical-align: middle;--}}
{{--        }--}}

{{--        tr th:first-child,--}}
{{--        tr td:first-child {--}}
{{--            text-align: left;--}}
{{--        }--}}

{{--        .media img {--}}
{{--            height: 60px;--}}
{{--            width: 60px;--}}
{{--        }--}}

{{--        .media p {--}}
{{--            font-weight: 400;--}}
{{--            margin: 0;--}}
{{--        }--}}

{{--        .media p.title {--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        /* Balance Info Section */--}}
{{--        .balance-info .table td,--}}
{{--        .balance-info .table th {--}}
{{--            padding: 0;--}}
{{--            border: 0;--}}
{{--        }--}}

{{--        .balance-info tr td:first-child {--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        tfoot {--}}
{{--            border-top: 2px solid var(--darkWhite);--}}
{{--        }--}}

{{--        tfoot td {--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        /* Cart BG */--}}
{{--        .cart-bg {--}}
{{--            height: 250px;--}}
{{--            bottom: 32px;--}}
{{--            left: -40px;--}}
{{--            opacity: 0.3;--}}
{{--            position: absolute;--}}
{{--        }--}}

{{--        /* Footer Section */--}}
{{--        footer {--}}
{{--            text-align: center;--}}
{{--            position: absolute;--}}
{{--            bottom: 30px;--}}
{{--            left: 75px;--}}
{{--        }--}}

{{--        footer hr {--}}
{{--            margin-bottom: -22px;--}}
{{--            border-top: 3px solid var(--darkWhite);--}}
{{--        }--}}

{{--        footer a {--}}
{{--            color: var(--themeColor);--}}
{{--        }--}}

{{--        footer p {--}}
{{--            padding: 6px;--}}
{{--            border: 3px solid var(--darkWhite);--}}
{{--            background-color: var(--white);--}}
{{--            display: inline-block;--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body>

@include('partials.menu')

@livewire('navigation-menu')

@yield('content')

@livewireScripts

@include('partials.footer')
<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="/assets/js/login.js"></script>
<script src="/assets/assets/js/vendor/jquery-3.5.1-min.js"></script>
<script src="/assets/assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="/assets/assets/js/popper.min.js"></script>
<script src="/assets/assets/js/bootstrap-4.5.0.min.js"></script>

<!--====== Plugins js ======-->
<script src="/assets/assets/js/plugins.js"></script>

<!--====== Counter Up js ======-->
<script src="/assets/assets/js/waypoints.min.js"></script>
<script src="/assets/assets/js/jquery.counterup.min.js"></script>



<!--====== Scrolling Nav js ======-->
<script src="/assets/assets/js/jquery.easing.min.js"></script>
<script src="/assets/assets/js/scrolling-nav.js"></script>

<!--====== wow js ======-->
<script src="/assets/assets/js/wow.min.js"></script>

<!--====== Particles js ======-->
<script src="/assets/assets/js/particles.min.js"></script>

<!--====== Main js ======-->
<script src="/assets/assets/js/main.js"></script>

</body>
</html>
