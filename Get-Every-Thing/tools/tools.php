<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Site Tools - Get Every Thing</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="google-site-verification" content="BH-aQ55eGfUPGBjI34_7LoiZf5Ab738W_DslGMMPM5U" />

    <link rel="icon" type="image/png" href="http://get-everything.great-site.net/geteverything/favicon" />

    <!-- CSS  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link href="http://get-everything.great-site.net/geteverything/App.css" rel="stylesheet" />

    <link href="http://get-everything.great-site.net/geteverything/theme.css" rel="stylesheet" />

    <link href="http://get-everything.great-site.net/geteverything/SocialButton.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/cfd3d247c4.js" crossorigin="anonymous"></script>

    <link href="http://get-everything.great-site.net/geteverything/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="http://get-everything.great-site.net/geteverything/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="http://get-everything.great-site.net/geteverything/nav.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="http://get-everything.great-site.net/geteverything/cookie.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="http://get-everything.great-site.net/geteverything/form.css" rel="stylesheet" />

    <style>
        @media only screen and (min-width:600px) and (max-width:5000px) {
            .login {
                margin-top: -8px;
            }
        }

        html,
        body {
            background: url("http://get-everything.great-site.net/geteverything/form_bg");
            background-position: fixed;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>

    <!-- Website Start -->

    <!-- Site Tools -->

    <style>
        .links {
            font-weight: bolder;
        }

        .links:hover {
            color: red;
            cursor: pointer;
        }
    </style>

    <div class="privacypolicy transparent" style="color:var(--text-color);background-color:var(--background-color);">

        <h1 class="center white-text header">View Our Site Tools</h1>

        <br /><br />

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Weight Converter</div>
                <div class="collapsible-body white"><a class="links" href="http://get-everything.great-site.net/weight-mass-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Length Converter</div>
                <div class="collapsible-body white"><a class="links" href="https://get-everything.ga/length-distance-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Area Converter</div>
                <div class="collapsible-body white"><a class="links" href="https://get-everything.ga/area-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Speed Converter</div>
                <div class="collapsible-body white"><a class="links" href="https://get-everything.ga/speed-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Temperature Converter</div>
                <div class="collapsible-body white"><a class="links" href="https://get-everything.ga/temperature-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header links teal-text">Time Converter</div>
                <div class="collapsible-body white"><a class="links" href="https://get-everything.ga/time-converter">⇒ Click Here To Use This Tool</a></div>
            </li>
        </ul>

    </div>

    <!-- Cookie Banner -->

    <?php if (isset($_COOKIE['cookie'])) {
    } else { ?>

        <div id="banner" class="banner cookie">

            <div class="button center">

                <span class="button-text" style="padding:5px;">

                    By using this website, you automatically accept that we use <span style="margin-right:5px;"></span>

                    <i class="fa fa-cookie-bite"></i>

                    <a href="http://get-everything.great-site.net/privacy_policy">

                        <u class="link">cookies </u>

                    </a>

                    <span id="ok" class="ok" style="margin-left:20px;border:1px solid grey;padding:2px;padding-left:10px;padding-right:10px;">

                        OK

                    </span>

                </span>

            </div>

        </div>

    <?php
    }
    ?>

    <!-- Website End -->

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

    <script src="http://get-everything.great-site.net/geteverything/materialize.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="http://get-everything.great-site.net/geteverything/init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });
    </script>

    <!-- Cookie Banner JavaScripts -->

    <script>
        $(document).ready(function() {

            $('#ok').click(function() {

                $('#banner').hide('slow', function() {

                    document.cookie = 'cookie=ok; max-age=604800; path=/;';

                });

            });

        });
    </script>

    <!-- Fading JavaScripts  -->

    <script>
        $(document).ready(function() {

            $('.NavBar').first().delay(0).animate({
                opacity: '0'
            }, 0);

            $('.NavBar').last().delay(200).animate({
                opacity: '1'
            }, 500);

            $('.Header').first().delay(0).animate({
                opacity: '0'
            }, 0);

            $('.Header').last().delay(500).animate({
                opacity: '1'
            }, 1500);

            $('.Footer').first().delay(0).animate({
                opacity: '0'
            }, 0);

            $('.Footer').last().delay(200).animate({
                opacity: '1'
            }, 500);

        });
    </script>

    <!-- Switch Theme JavaScripts -->

    <script>
        <?php

        if (isset($_COOKIE['Theme'])) {
        ?>

            // Wait for document to load
            document.addEventListener("DOMContentLoaded", function(event) {

                document.documentElement.setAttribute("data-theme", "light");

                $(document).ready(function() {

                    var switchToTheme = "<?php echo $_COOKIE['Theme'] ?>";

                    // Set our currenet theme to the new one
                    document.documentElement.setAttribute("data-theme", switchToTheme);

                });

            });

        <?php
        }
        ?>

        // Wait for document to load
        document.addEventListener("DOMContentLoaded", function(event) {

            document.documentElement.setAttribute("data-theme", "light");

            // Get our button switcher
            var themeSwitcher = document.getElementById("theme-switcher");
            var mobileThemeSwitcher = document.getElementById("mobile-theme-switcher");

            // When our button gets clicked
            themeSwitcher.onclick = function() {

                // Get the current selected theme, on the first run
                // it should be `light`

                var currentTheme = document.documentElement.getAttribute("data-theme");

                // Switch between `dark` and `light`
                var switchToTheme = currentTheme === "dark" ? "light" : "dark"

                // Set our currenet theme to the new one
                document.documentElement.setAttribute("data-theme", switchToTheme);

                document.cookie = `Theme = ${switchToTheme}; path = /`;

            }

            // When our button gets clicked
            mobileThemeSwitcher.onclick = function() {

                // Get the current selected theme, on the first run
                // it should be `light`

                var currentTheme = document.documentElement.getAttribute("data-theme");

                // Switch between `dark` and `light`
                var switchToTheme = currentTheme === "dark" ? "light" : "dark"

                // Set our currenet theme to the new one
                document.documentElement.setAttribute("data-theme", switchToTheme);

                document.cookie = `Theme = ${switchToTheme}; path = /`;

            }

        });
    </script>

</body>

</html>