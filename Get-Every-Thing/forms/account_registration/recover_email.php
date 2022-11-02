<?php
 
 session_start();
 
 ob_start();

 $_SESSION['message'] = "Forget Your Password. Don't Worry. You Can Reset It Easily.";
 
?>

<!DOCTYPE html>

<html lang="en">

  <head>
  
     <title>Reset Password - Get Every Thing</title>

     <meta charset="utf-8">
 
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

     <meta name="google-site-verification" content="BH-aQ55eGfUPGBjI34_7LoiZf5Ab738W_DslGMMPM5U" />

     <link rel="icon" type="image/png" href="http://get-everything.ga/geteverything/favicon"/>
 
     <!-- CSS -->

     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 
     <script src="https://kit.fontawesome.com/cfd3d247c4.js" crossorigin="anonymous"></script>

     <link href="http://get-everything.ga/geteverything/form.css" rel="stylesheet"/>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

     <link href="http://get-everything.ga/geteverything/form_theme.css" rel="stylesheet"/>

    <style>
     
      html,body{display:flex;justify-content:center;height:100%;background:url("http://get-everything.ga/geteverything/form_bg");background-position:center;background-repeat:no-repeat;background-size:cover;}
     
    </style>

  </head>
  
  <body>

     <!-- Recover Email PHP Code Start -->
     
     <?php

$server = "sql205.epizy.com";
$user = "epiz_29887945";
$password = "r3SsrhsnP8H";
$DataBase = "epiz_29887945_geteverything";

         $connect = mysqli_connect($server, $user, $password, $DataBase);

         if($connect) {
     ?>
  
      <!-- <script>alert("DataBase Connected Successfully . . . ! !");</script> -->

     <?php
    
      };
       
      if(isset($_POST['submit'])) {
      
          $Emails = mysqli_real_escape_string( $connect, $_POST['Emails'] );
          setcookie( 'recover_email', $Emails, time()+60 );
          $Check_Email = "select * from registered_users where Emails = '$Emails' ";
          $Email_Query = mysqli_query( $connect, $Check_Email );
          $Count_Email = mysqli_num_rows($Email_Query);
        
          if($Count_Email > 0) {
          
            unset($_SESSION['get-everything.ga/login/password']);
            unset($_SESSION['get-everything.ga/login/email']);
                 ?>

                 <script>location.replace('http://get-everything.ga/reset_password');</script>
              
                 <?php
            
            } else {
        

              $_SESSION['message'] = "Email Doesn't Found. You Have To <a href='http://get-everything.ga/signup'> Create Your Account </a> <span style='margin-left:5px;'></span> . . . ! !";

              unset($_SESSION['get-everything.ga/login/email']);

            };
      
        };
    
      ?>
   
      <!-- PHP Code End -->
    
      <!-- Recover Email Html Code Start -->

      <div class="main-block">
     
         <h1 class="h1">Reset Password</h1>

          <h6 style="text-align:center;"> ● ● ● ● ● </h6>
          
          <?php 
            
            if (isset($_SESSION['message'])) {
  
             ?>
  
              <div class="container" style="margin-top:-20px;padding-left:30px;padding-right:30px;">
            
                <p style="text-align:center;background-color:yellowgreen;color:red;padding:10px;font-weight:900;">
                
                 <?php echo $_SESSION['message']; ?>
                  
                </p>
            
              </div>
  
            <?php  
          };
          ?>
  
          <br/>

          <form method="POST">

          <label id="icon" for="Emails"><i style="font-size:14px;" class="fa fa-envelope"></i></label>
       
          <input type="text" name="Emails" id="Emails" placeholder="Email" required

              value="<?php if(isset($_COOKIE['recover_email'])) { echo $_COOKIE['recover_email']; } ?>"
       
            />

            <div class="btn-block">
       
              <button id="submit" name="submit" type="submit">Check Your Email</button>
       
            </div>
       
          <br/><br/><br/><br/>
       
          <div class="container">
           
                <p class="h1">Don't Have An Account..? <span style="margin-right:5%;"></span>
         
                 <a href="http://get-everything.ga/signup" class="btn">Sign Up</a>
           
                </p>
       
            </div>
     
        </form>
   
     </div>
 
  <!-- Html Code End -->

  <!-- Scripts -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

  <!-- Switch Theme JavaScripts -->

  <script>

  <?php

  if(isset($_COOKIE['Theme'])) { 
  ?>       

   // Wait for document to load
   document.addEventListener("DOMContentLoaded", function(event) {

       document.documentElement.setAttribute("data-theme", "light");

       // Get our button switcher
       var themeSwitcher = document.getElementById("theme-switcher");

         $(document).ready(function() {
         
           var switchToTheme = "<?php echo $_COOKIE['Theme'] ?>";

           // Set our currenet theme to the new one
           document.documentElement.setAttribute("data-theme", switchToTheme);

          });

      });
    
  <?php
  }
  ?>
  
  </script>

 </body>

</html>