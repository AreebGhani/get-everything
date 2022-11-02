<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Length / Distance Converter - Get Every Thing</title>

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

  <style>
    @media only screen and (min-width:600px) and (max-width:5000px) {
      .login {
        margin-top: -8px;
      }
    }
  </style>

</head>

<body>

  <!-- Website Start -->

  <!-- NavBar -->

  <div id="home" class="NavBar z-depth-5">

    <nav class="teal" role="navigation">

      <div class="nav-wrapper nav-content">

        <a id="logo-container" href="http://get-everything.great-site.net/home" class="brand-logo yellow-text"><strong style="font-weight:bold; cursor:pointer;"> GET EVERY THING </strong></a>

        <!-- Tools Button Drowpdown -->

        <ul id="dropdown1" class="dropdown-content">

          <li><a href="http://get-everything.great-site.net/weight-mass-converter">Weight Converter</a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/length-distance-converter">Length Converter</a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/area-converter">Area Converter</a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/speed-converter">Speed Converter</a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/temperature-converter">Temperature Converter</a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/time-converter">Time Converter</a></li>

        </ul>

        <!-- Share Button Drowpdown -->

        <ul id="dropdown2" class="dropdown-content transparent">

          <li>
            <div class="center"><a href="http://get-everything.great-site.net/Share-On-Gmail" rel="nofollow" target="_blank"><i class="red-text fa fa-google fa-2x"></i></a></div>
          </li>

          <li class="divider"></li>

          <li>
            <div class="center"><a href="http://get-everything.great-site.net/Share-On-Facebook" rel="nofollow" target="_blank"><i class="blue-text fa fa-facebook-f fa-2x"></i></a></div>
          </li>

          <li class="divider"></li>

          <li>
            <div class="center"><a href="http://get-everything.great-site.net/Share-On-WhatsApp" rel="nofollow" target="_blank"><i class="green-text fa fa-whatsapp fa-2x"></i></a></div>
          </li>

          <li class="divider"></li>

          <li>
            <div class="center"><a href="http://get-everything.great-site.net/Share-On-Twitter" rel="nofollow" target="_blank"><i class="blue-text fa fa-twitter fa-2x"></i></a></div>
          </li>

          <li class="divider"></li>

          <li>
            <div class="center"><a href="http://get-everything.great-site.net/Share-On-Instagram" rel="nofollow" target="_blank"><i class="purple-text fa fa-instagram fa-2x"></i></a></div>
          </li>

        </ul>

        <!-- Share Mobile Button Drowpdown -->

        <ul id="dropdown3" class="dropdown-content">

          <li><a href="http://get-everything.great-site.net/Share-On-Gmail" rel="nofollow" target="_blank"><i style="margin-left:-5px;color:#c12127;" class="fa fa-google fa-sm"><span style="margin-right:5px;"></span><strong style="font-weight:900;font-size:11px;">Gmail</strong></i></a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/Share-On-Facebook" rel="nofollow" target="_blank"><i style="margin-left:-5px;color:#3b5999;" class="fa fa-facebook-square fa-sm"><span style="margin-right:5px;"></span><strong style="font-weight:900;font-size:11px;">Facebook</strong></i></a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/Share-On-WhatsApp" rel="nofollow" target="_blank"><i style="margin-left:-5px;color:#47fa47;" class="fa fa-whatsapp fa-sm"><span style="margin-right:5px;"></span><strong style="font-weight:900;font-size:11px;">WhatsApp</strong></i></a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/Share-On-Twitter" rel="nofollow" target="_blank"><i style="margin-left:-5px;color:#55acee;" class="fa fa-twitter-square fa-sm"><span style="margin-right:5px;"></span><strong style="font-weight:900;font-size:11px;">Twitter</strong></i></a></li>

          <li class="divider"></li>

          <li><a href="http://get-everything.great-site.net/Share-On-Instagram" rel="nofollow" target="_blank"><i style="margin-left:-5px;color:#8a3ab9;" class="fa fa-instagram fa-sm"><span style="margin-right:5px;"></span><strong style="font-weight:900;font-size:11px;">Instagram</strong></i></a></li>

          <li class="divider"></li>

        </ul>

        <!-- Large Screen Nav -->

        <ul class="right hide-on-med-and-down">

          <li><a href="http://get-everything.great-site.net/home"><span class="yellow-text">Home</span></a></li>

          <li><a href="http://get-everything.great-site.net/about"><span class="yellow-text">About</span></a></li>

          <li><a href="http://get-everything.great-site.net/contact"><span class="yellow-text">Contact</span></a></li>

          <li><a class="dropdown-trigger yellow-text" href="#" data-target="dropdown1"><span>Our Tools</span><span style="margin-right:5px;"></span><i class="fa fa-chevron-circle-down fa-sm"></i></a></li>

          <li><a class="yellow-text" href="http://get-everything.great-site.net/geteverything/logout"><span>

                <?php if (isset($_SESSION['get-everything.ga/logout'])) {
                  echo $_SESSION['get-everything.ga/logout'];

                ?>
                  <span style="margin-right:5px;"></span><i class="fa fa-user fa-sm" style="margin-right:5px;"></i></span></a></li>
        <?php

                } else {

        ?>

          <li><a class="yellow-text" href="http://get-everything.great-site.net/login"><span>

                Login

                <span style="margin-right:5px;"></span><i class="fa fa-user fa-sm" style="margin-right:5px;"></i></span></a></li>

        <?php

                }

        ?>

        <li><a class="dropdown-trigger yellow-text" data-target="dropdown2"><i style="font-size:25px; margin-left:5px;" class="fa fa-share"></i></a></li>

        <li><a><span id="theme-switcher"><span class="button button-text">Switch Theme</span></span></a></li>

        </ul>

        <!-- Mobile Screen Nav -->

        <ul id="nav-mobile" class="sidenav teal">

          <li><br /></li>

          <li><a href="http://get-everything.great-site.net/home"><span class="yellow-text">Home</span></a></li>

          <li><a href="http://get-everything.great-site.net/about"><span class="yellow-text">About</span></a></li>

          <li><a href="http://get-everything.great-site.net/contact"><span class="yellow-text">Contact</span></a></li>

          <li><a class="dropdown-trigger yellow-text" href="#" data-target="dropdown1">Our Tools <span></span><i style="margin-right:-80px; padding-left:70px;" class="yellow-text fa fa-chevron-circle-down fa-sm"></i></a></li>

          <?php if (isset($_SESSION['get-everything.ga/logout'])) {

          ?>

            <li><a class="yellow-text login" href="http://get-everything.great-site.net/geteverything/logout"><span>

                  <?php echo $_SESSION['get-everything.ga/logout']; ?>

                  <span style="margin-right:5px;"></span><i class="fa fa-user fa-sm" style="margin-right:5px;"></i></span></a></li>

          <?php

          } else {

          ?>

            <li><a class="yellow-text login" href="http://get-everything.great-site.net/login"><span>

                  Login

                  <span style="margin-right:5px;"></span><i class="fa fa-user fa-sm" style="margin-right:5px;"></i></span></a></li>

          <?php

          }

          ?>

          <li style="margin-top:8px;"><a href="#" class="dropdown-trigger yellow-text" data-target="dropdown3"><i class="fa fa-share fa-2x"></i></a></li>

          <li style="margin-top:10px;"><a><span id="mobile-theme-switcher"><span class="button button-text">Switch Theme</span></span></a></li>

        </ul>

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="fa fa-bars fa-2x"></i></a>

      </div>

    </nav>

  </div>

  <!-- Tool -->

  <div class="left-align privacypolicy ContactForm">

    <h4 class="center"><u>Length / Distance Converter</u></h4>

    <br />

    <div class="container row z-depth-1" style="padding:20px;">

      <div class="col l6 s12" style="padding:20px;">

        <div class="input-field">

          <label for="input">Please Enter Value</label>

          <input type="text" id="input" name="input" value="" required style="color:teal;font-weight:bold;" class="validate input-value" autocomplete="off" maxlength="12" pattern="^[\-\+]?(([1-9](\d*|\d{0,2}(,\d{3})*))|0)(\.\d{1,2})?$" />

          <br /><br />

          <select id="unit" class="btn green" onchange="convertData()">

            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Millimeter (mm)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Centimeter (cm)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Meter (m)</option>
            <option selected="selected" class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Kilometer (km)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Mile (mi)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Yard (yd)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Foot (ft)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Inch (in)</option>
            <option class="grey lighten-2 teal-text" style="text-transform:capitalize;font-size:small;font-weight:900;">Nautical mile (nmi)</option>

          </select>

          <br /><br /><br />

          <a href="#result" class="smooth-scroll">
            <input type="button" id="convert-button" class="btn blue" value="Convert" onclick="convertData()" />
          </a>

        </div>

        <br />

        <p>

          This length converter can convert between different length units,

          you just need to enter a original value and select the original unit in combobox,

          converter will quickly calculate all the values of other length units.

        </p>

        <p>How To Use:</p>

        <ul>

          <li>Input a valid numeric.</li>
          <li>Select an original Length unit, such as Millimeter, Centimeter, Meter or other.</li>
          <li>Click button "Convert" to calculate.</li>
          <li>The calculation results will be displayed in table.</li>

        </ul>

        <p>Remark:</p>

        <ul>

          <li>Length is the most extended dimension of an object.</li>
          <li>Distance is a measure for how far of two objects, for example, how far to travel from point A to point B.</li>
          <li id="scroll_result">Length and distance should not be a negative value.</li>

        </ul>

      </div>

      <div class="col l2 s12"><br /></div>

      <div class="col l3 s12" style="padding:20px;">

        <div class="grid-item" id="item-1">Millimeter (mm)</div>

        <input type="text" id="output-1" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 mm" readonly="readonly" />

        <div id="item-2">Centimeter (cm)</div>

        <input type="text" id="output-2" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 cm" readonly="readonly" />

        <div id="item-3">Meter (m)</div>

        <input type="text" id="output-3" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 m" readonly="readonly" />

        <div id="item-4">Kilometer (km)</div>

        <input type="text" id="output-4" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 km" readonly="readonly" />

        <div id="item-5">Mile (mi)</div>

        <input type="text" id="output-5" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 mi" readonly="readonly" />

        <div id="item-6">Yard (yd)</div>

        <input type="text" id="output-6" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 yd" readonly="readonly" />

        <div id="item-7">Foot (ft)</div>

        <input type="text" id="output-7" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 ft" readonly="readonly" />

        <div id="item-8">Inch (in)</div>

        <input type="text" id="output-8" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 in" readonly="readonly" />

        <div id="item-9">Nautical mile (nmi)</div>

        <input type="text" id="output-9" style="color:teal;font-weight:bold;" class="input-text" placeholder="0.00 nmi" readonly="readonly" />

      </div>

      <form>

        <input type="hidden" id="factors" value="1000000,100000,1000,1,0.62137119,1093.6133,3280.8399,39370.0787,0.5399568" />

      </form>

    </div>

    <br /><br /><br /><br />

  </div>

  <!-- Footer -->

  <footer class="page-footer teal center z-depth-5 Footer">

    <div class="container">

      <div class="row">

        <div class="col l6 s12 z-depth-1">

          <h5 class="yellow-text"><strong>Company Bio</strong></h5>

          <p style="margin-bottom:-10px;" class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>

          <p><br /></p>

        </div>

        <div class="col l3 s12 z-depth-1">

          <h5 class="yellow-text"><strong>Our Tools</strong></h5>

          <ul>

            <li><a class="footer_links" href="http://get-everything.great-site.net/weight-mass-converter"><strong>Weight Converter</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/length-distance-converter"><strong>Length Converter</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/area-converter"><strong>Area Converter</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/speed-converter"><strong>Speed Converter</strong></a></li>

            <li><br /></li>

          </ul>

        </div>

        <div class="col l3 s12 z-depth-1">

          <h5 class="yellow-text"><strong>Site Links</strong></h5>

          <ul>

            <li><a class="footer_links" href="http://get-everything.great-site.net/privacy_policy"><strong>Privacy Policy</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/terms-&-conditions"><strong>Terms & Conditions</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/disclaimer"><strong>Disclaimer</strong></a></li>

            <li><a class="footer_links" href="http://get-everything.great-site.net/sitemap.xml"><strong>Sitemaps</strong></a></li>

            <li><br /></li>

          </ul>

        </div>

      </div>

    </div>

    <br />

    <div class="footer-copyright" style="height:100%; width:100%;">

      <div class="container">

        Copyright ©

        <script>
          document.write(new Date().getFullYear());
        </script>

        <span></span>

        <a class="copyright_link" href="http://get-everything.great-site.net/home">

          - " <u>GET EVERY THING</u> " -

        </a> All Right Reserved .

      </div>

    </div>

    <br />

  </footer>

  <!-- Cookie Banner -->

  <?php if (isset($_COOKIE['cookie'])) {
  } else { ?>

    <div id="banner" class="banner cookie">

      <div class="button center">

        <span class="button-text" style="padding:5px;">

          By using this website, you automatically accept that we use

          <span style="margin-right:5px;"></span><i class="fa fa-cookie-bite"></i>

          <a href="http://get-everything.great-site.net/privacy_policy">

            <u class="link"> cookies </u>

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

  <script src="http://get-everything.great-site.net/geteverything/min_convert_2.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

  <script src="http://get-everything.great-site.net/geteverything/materialize.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="http://get-everything.great-site.net/geteverything/init.js"></script>

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

  <!-- Smooth Scrolling JavaScripts -->

  <script>
    const mq = window.matchMedia("(max-width: 992px)");

    if (mq.matches) {
      document.getElementById("scroll_result").setAttribute("id", "result");
    } else {
      document.getElementById("scroll_result").setAttribute("id", "no-id");
    };

    $(document).ready(function() {

      // Add smooth scrolling to all links
      $(".smooth-scroll").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({

            scrollTop: $(hash).offset().top

          }, 1000, function() {


            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;

          });

        } // End if

      });

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