<!DOCTYPE html>

<html lang="en">

<head>

  <title>404 Page Not Found</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="google-site-verification" content="BH-aQ55eGfUPGBjI34_7LoiZf5Ab738W_DslGMMPM5U" />

  <link rel="icon" type="image/png" href="http://get-everything.great-site.net/geteverything/favicon" />

  <!-- CSS  -->

  <link href="http://get-everything.great-site.net/geteverything/App.css" rel="stylesheet" />

  <link href="http://get-everything.great-site.net/geteverything/theme.css" rel="stylesheet" />

  <link href="http://get-everything.great-site.net/geteverything/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="http://get-everything.great-site.net/geteverything/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <style>
    html,
    body {
      height: 100%;
    }

    html {
      display: table;
      width: 100%;
    }

    body {
      display: table-cell;
      text-align: center;
      vertical-align: middle;
    }
  </style>

</head>

<body>

  <!-- Website Start -->

  <!-- 404 Error -->

  <div class="center privacypolicy">

    <h1 style="margin-top:8px;"><u>OOps! Page not found...!!</u> 😥</h1>

    <br />

    <h4><button onclick="history.back(-1)" class="button btn waves-effect teal lighten-1 pulse">Go Back</button></h4>

  </div>

  <!-- Website End -->

  <!-- Scripts -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Fading JavaScripts  -->

  <script>
    $(document).ready(function() {

      $('.NavBar').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.NavBar').last().delay(200).animate({
        opacity: '1'
      }, 500);

      $('.privacypolicy').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.privacypolicy').last().delay(500).animate({
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