<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ASSURANCES LYAZIDI</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/assets/images/footer-bg.svg)">

    <img class="wave" src="assets/wavve.png">


            <div class="vl"></div>
                <div class="container">
                    <div class="img">
                        <img src="assets/logo_assu.png" width="10">
                    </div>
                    <div class="login-content">
                        <form action="{{ route('login') }}">
                            <table>
                                <tr>
                            <img src="assets/avatar.svg">
                            </tr>
                            <tr>
                            <h2 class="title">Welcome</h2>
                        </tr>
                            <input type="submit" class="btn" value="Login">
                        </form>
                    <form action="{{ route('register') }}">

                        </form>
                    </div>
                </div>
    </table>
                <script type="text/javascript" src="assets/js/login.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
