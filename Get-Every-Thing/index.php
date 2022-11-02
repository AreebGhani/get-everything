<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Get Every Thing</title>

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

    .img {
      filter: var(--filter);
    }
  </style>

</head>

<body>

  <!-- Website Start -->

  <!-- NavBar -->

  <div class="NavBar z-depth-5" id="home">

    <nav class="teal" role="navigation">

      <div class="nav-wrapper nav-content">

        <a id="logo-container" href="#home" class="smooth-scroll brand-logo yellow-text"><strong style="font-weight:bold; cursor:pointer;"> GET EVERY THING </strong></a>

        <!-- Tools Button Dropdown -->

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

        <!-- Large Screen Nav -->

        <ul class="right hide-on-med-and-down">

          <li><a class="smooth-scroll" href="#home"><span class="yellow-text">Home</span></a></li>

          <li><a class="smooth-scroll" href="#about"><span class="yellow-text">About</span></a></li>

          <li><a class="smooth-scroll" href="#contact"><span class="yellow-text">Contact</span></a></li>

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

        <li><a><span id="theme-switcher"><span class="button button-text">Switch Theme</span></span></a></li>

        </ul>

        <!-- Mobile Screen Nav -->

        <ul id="nav-mobile" class="sidenav teal">

          <li><br /></li>

          <li><a class="smooth-scroll" href="#home"><span class="yellow-text">Home</span></a></li>

          <li><a class="smooth-scroll" href="#about"><span class="yellow-text">About</span></a></li>

          <li><a class="smooth-scroll" href="#contact"><span class="yellow-text">Contact</span></a></li>

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

          <li style="margin-top:10px;"><a><span id="mobile-theme-switcher"><span class="button button-text">Switch Theme</span></span></a></li>

        </ul>

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="fa fa-bars fa-2x"></i></a>

      </div>

    </nav>

  </div>

  <!-- Header -->

  <div id="index-banner" class="Header parallax-container valign-wrapper">

    <div class="section no-pad-bot">

      <div class="container">

        <h1 class="header center"><br /><br /><u>Welcome To Our Site</u> 😃</h1>

        <div class="row center">

          <h6 class="header-p col s12">Here You Will Get Every Thing What You Want...!!</h6>

        </div>

        <div class="row center">

          <a style="padding:20px;" href="http://get-everything.great-site.net/tools" id="download-button" class="button waves-effect teal lighten-1 pulse">View Our Site Tools</a>

        </div>

        <div class="row center">

          <h6 class="header-p col s12 black-text"><br /><br /><br /><br /><br /><br /></h6>

        </div>

      </div>

    </div>

    <div class="parallax" style="opacity:0.8;"><img class="img" src="http://get-everything.great-site.net/geteverything/background_img1" /></div>

  </div>

  <!-- About -->

  <div class="About" id="about">

    <br /><br /><br />

    <h3 class="center teal-text"><strong><u>Why Us . . ?</u></strong></h3>

    <div class="container">

      <div class="section">

        <div class="row  z-depth-1">

          <div class="col s12 m4">

            <div class="icon-block">

              <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>

              <h5 class="center">High Speed Downloading</h5>

              <p class="light">We provide maximum downloading speed with multiple downloads. This will help you to download more and more items from our site at extremely high speed. And it's save your time.</p>

            </div>

          </div>

          <div class="col s12 m4">

            <div class="icon-block">

              <h2 class="center brown-text"><i class="material-icons">download</i></h2>

              <h5 class="center">Single Click Downloading</h5>

              <p class="light">We provide single downloading server connection. It means, By clicking one single download button, Your download will be start. It's help you to stay at one site, Not on multiple sites, And it's easy.</p>

            </div>

          </div>

          <div class="col s12 m4">

            <div class="icon-block">

              <h2 class="center brown-text"><i class="material-icons">settings</i></h2>

              <h5 class="center">Easy To Use Our Site Tools</h5>

              <p class="light">We have provided detailed information as well as specific examples to help new users to get knowledge of using our tools. We are also always open to help and can answer any questions.</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Carousel -->

  <div class=" teal Carousel">

    <br /><br /><br /><br />

    <div class="carousel carousel-slider">

      <div class="carousel carousel-slider center">

        <div class="carousel-fixed-item center">

          <a href="http://get-everything.great-site.net/tools" class="btn waves-effect teal yellow-text hoverable" style="font-weight:bolder;">Goto Tools</a>

        </div>

        <div class="carousel-item teal white-text" href="#one!">

          <h2 class="yellow-text">Weight Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This weight converter can convert between different weight units, you just need to enter a original value and select the original unit in combobox, will quickly calculate all the values of other weight units.

              </p>

            </div>

          </div>

        </div>

        <div class="carousel-item teal white-text" href="#two!">

          <h2 class="yellow-text">Length Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This length converter can convert between different length units, you just need to enter a original value and select the original unit in combobox, converter will quickly calculate all the values of other length units.

              </p>

            </div>

          </div>

        </div>

        <div class="carousel-item teal white-text" href="#three!">

          <h2 class="yellow-text">Area Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This area converter can convert between different area units, you just need to enter a original value and select the original unit in combobox, converter will quickly calculate all the values of other area units.

              </p>

            </div>

          </div>

        </div>

        <div class="carousel-item teal white-text" href="#four!">

          <h2 class="yellow-text">Speed Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This speed converter can convert between different speed units, you just need to enter a original value and select the original unit in combobox, converter will quickly calculate all the values of other speed units.

              </p>

            </div>

          </div>

        </div>

        <div class="carousel-item teal white-text" href="#five!">

          <h2 class="yellow-text">Temperature Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This temperature converter can convert between different temperature units, you just need to enter a original value and select the original unit in combobox, converter will quickly calculate all the values of other temperature units.

              </p>

            </div>

          </div>

        </div>

        <div class="carousel-item teal white-text" href="#one!">

          <h2 class="yellow-text">Time Converter</h2>

          <div class="container">

            <div class="container row" style="text-align:justify;">

              <p class="container">

                This time converter can convert between different time units, you just need to enter a original value and select the original unit in combobox, converter will quickly calculate all the values of other time units.

              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

    <br /><br /><br /><br />

  </div>

  <!-- Middle -->

  <div class="parallax-container valign-wrapper Middle">

    <div class="section no-pad-bot">

      <div class="container">

        <div class="row center">

          <h5 class="header col s12"><strong>"Enjoy Our Awesome Tools On Our Site"</strong></h5>

        </div>

      </div>

    </div>

    <div class="parallax" style="opacity:0.8;"><img class="img" src="http://get-everything.great-site.net/geteverything/background_img2" /></div>

  </div>

  <!-- Contact -->

  <div class="Contact" id="contact">

    <br /><br /><br />

    <div class="container">

      <div class="section">

        <div class="row z-depth-1 hoverable">

          <div class="col s12">

            <h3><i class="mdi-content-send brown-text"></i></h3>

            <h5 class="left-align teal-text center"><u>Want To Talk with us . . . ! !</u></h5>

            <br /><br />

            <!-- Contact Form -->

            <div class="container ContactForm">

              <form id="form" action="http://get-everything.great-site.net/geteverything/contact_home" method="POST">

                <div class="input-field">

                  <input id="name" class="validate" type="text" name="name" required>

                  </input>

                  <label for="name"> <strong>Your Name</strong> </label>

                </div>

                <br />

                <div class="input-field">

                  <input id="email" class="validate" type="text" name="email" required>

                  </input>

                  <label for="email"> <strong>Eamil</strong> </label>

                </div>

                <br />

                <div class="input-field">

                  <input id="message" class="validate" type="text" name="message" data-length="100" required>

                  </input>

                  <label for="message"> <strong>Message</strong> </label>

                </div>

                <br />

                <div class="d-flex justify-content-center">

                  <button type="submit" name="submit" value="submit" id="submit" class="contact-form-btn">

                    <strong>Submit</strong>

                    <i class="material-icons right">send</i>

                  </button>

                </div>

              </form>

            </div>

            <br /><br /><br />

          </div>

        </div>

      </div>

    </div>

  </div>

  <br /><br />

  <!-- Feedback -->

  <div class="parallax-container valign-wrapper Feedback">

    <div class="section no-pad-bot">

      <div class="container">

        <div class="row center">

          <h5 class="header col s12"><strong>Hope You Like Our Website . . . ! !</strong></h5>

        </div>

      </div>

    </div>

    <div class="parallax" style="opacity:0.8;"><img class="img" src="http://get-everything.great-site.net/geteverything/background_img3" /></div>

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

  <!-- Fixed Social Popup Button -->

  <div class="fixed-action-btn">

    <a class="button pulse wave-effect btn-floating btn-large teal">

      <i class="fa fa-share-alt"></i>

    </a>

    <ul>

      <li>

        <a href="http://get-everything.great-site.net/Share-On-Gmail" rel="nofollow" target="_blank" class="black btn-floating social-buttons__button social-button social-button--mail" aria-label="Email">

          <i class="fa fa-google"></i>

        </a>

      </li>

      <li>

        <a href="Share-On-Facebook" rel="nofollow" target="_blank" class="black btn-floating social-buttons__button social-button social-button--facebook" aria-label="Facebook">

          <i class="fa fa-facebook"></i>

        </a>

      </li>

      <li>

        <a href="http://get-everything.great-site.net/Share-On-WhatsApp" rel="nofollow" target="_blank" class="black btn-floating social-buttons__button social-button social-button--whatsapp" aria-label="Whatsapp">

          <i class="fa fa-whatsapp"></i>

        </a>

      </li>

      <li>

        <a href="http://get-everything.great-site.net/Share-On-Twitter" rel="nofollow" target="_blank" class="black btn-floating social-buttons__button social-button social-button--twitter" aria-label="Twitter">

          <i class="fa fa-twitter"></i>

        </a>

      </li>

      <li>

        <a href="http://get-everything.great-site.net/Share-On-Instagram" rel="nofollow" target="_blank" class="black btn-floating social-buttons__button social-button social-button--instagram " aria-label="Instagram">

          <i class="fa fa-instagram"></i>

        </a>

      </li>

    </ul>

  </div>

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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

  <script src="http://get-everything.great-site.net/geteverything/materialize.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="http://get-everything.great-site.net/geteverything/init.js"></script>

  <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      padding: 200,
      indicators: true
    }, setTimeout(autoplay, 4500));

    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
    }
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

  <!-- ContactForm Submit JavaScripts -->

  <script>
    $(document).ready(function() {

      var form = $('#form');

      $('#submit').click(function() {

        $.ajax({

          url: form.attr('action'),

          type: 'POST',

          data: $('#form input').serialize(),

          success: function(data, status) {

            console.log(data);

            console.log(status);

          }

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

      $('.About').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.About').last().delay(500).animate({
        opacity: '1'
      }, 1500);

      $('.Carousel').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.Carousel').last().delay(500).animate({
        opacity: '1'
      }, 1500);

      $('.Middle').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.Middle').last().delay(500).animate({
        opacity: '1'
      }, 1500);

      $('.Contact').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.Contact').last().delay(500).animate({
        opacity: '1'
      }, 1500);

      $('.ContactForm').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.ContactForm').last().delay(800).animate({
        opacity: '1'
      }, 2000);

      $('.Feedback').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.Feedback').last().delay(500).animate({
        opacity: '1'
      }, 1500);

      $('.Footer').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.Footer').last().delay(200).animate({
        opacity: '1'
      }, 500);

      $('.fixed-action-btn').first().delay(0).animate({
        opacity: '0'
      }, 0);

      $('.fixed-action-btn').last().delay(1000).animate({
        opacity: '1'
      }, 3000);

    });
  </script>

  <!-- Smooth Scrolling JavaScripts -->

  <script>
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

        document.cookie = "Theme=" + switchToTheme;

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

        document.cookie = "Theme=" + switchToTheme;

      }

    });
  </script>

</body>

</html>