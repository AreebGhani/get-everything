<?php
 
 session_start();
 
 ob_start();

 $_SESSION['message'] = "Enter Your New Password . . . ! !";

 unset($_SESSION['get-everything.ga/Reset_Password/password']);
          
 unset($_SESSION['get-everything.ga/Reset_Password/confirmpassword']);
 
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

     <!-- Reset Password PHP Code Start -->
     
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

         $Password = mysqli_real_escape_string( $connect, $_POST['Password'] );
         $ConfirmPassword = mysqli_real_escape_string( $connect, $_POST['ConfirmPassword'] );
        
         $_SESSION['get-everything.ga/Reset_Password/password'] = $Password;
         $_SESSION['get-everything.ga/Reset_Password/confirmpassword'] = $ConfirmPassword;

         $Encrypt_Password = password_hash( $Password, PASSWORD_BCRYPT );
         $Encrypt_ConfirmPassword = password_hash( $ConfirmPassword, PASSWORD_BCRYPT );

         if($Password === $ConfirmPassword) {

             if(isset($_COOKIE['recover_email'])) {
              
                $Emails = $_COOKIE['recover_email'];

                 $Change_Password = "update registered_users set Password = '$Encrypt_Password' where Emails = '$Emails' ";
                 $Update_Password_Query = mysqli_query($connect, $Change_Password);
                 $Change_ConfirmPassword = "update registered_users set ConfirmPaswword = '$Encrypt_ConfirmPassword' where Emails = '$Emails' ";
                 $Update_ConfirmPassword_Query = mysqli_query($connect, $Change_ConfirmPassword);
  
                     if($Update_Password_Query) {
                  
                         unset($_SESSION['get-everything.ga/Reset_Password/password']);
                         unset($_SESSION['get-everything.ga/Reset_Password/confirmpassword']);
                  
                         setcookie ( "message", "Your Password Have Been Reset . . . ! !", time()+60, "/");
                  
                         $_SESSION['message'] = "Password Updated Successfully . . . ! !";

                          ?>
                         <script>location.replace('http://get-everything.ga/geteverything/reset_restriction');</script>
                  
                         <?php
              
                        } else {
                  
                         unset($_SESSION['get-everything.ga/Reset_Password/password']);
                         unset($_SESSION['get-everything.ga/Reset_Password/confirmpassword']);
                  
                         setcookie ( "message", "Your Password Have Not Been Reset . . . ! !", time()+60, "/");
                  
                         $_SESSION['message'] = "Can't Update Your Password . . . ! !";
                         
                         ?>
                         <script>location.replace('http://get-everything.ga/login');</script>
                   
                         <?php
              
                        };

                    } else {

                        $_SESSION['message'] = "Reset Password Time Out <br/> Can't Get Your Email . . . ! ! <br/> Please <a href='http://get-everything.ga/recover_email'> Check Your Email </a>";
                    
                         unset($_SESSION['get-everything.ga/Reset_Password/password']);
          
                         unset($_SESSION['get-everything.ga/Reset_Password/confirmpassword']);

                    };
        
                } else {
        
                 unset($_SESSION['get-everything.ga/Reset_Password/password']);
          
                 unset($_SESSION['get-everything.ga/Reset_Password/confirmpassword']);
           
                 $_SESSION['message'] = "Password Are Not Matching . . . ! !";
        
                };

         };

        ?>
   
      <!-- PHP Code End -->
    
      <!-- Reset Password Html Code Start -->


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

          <form method="POST">

          <label id="icon" for="Password"><i style="font-size:14px;" class="fa fa-unlock-alt"></i></label>
       
          <input type="password" name="Password" id="Password" placeholder="New Password" required
          
             value="<?php if(isset($_SESSION['get-everything.ga/Reset_Password/password'])) {  echo $_SESSION['get-everything.ga/Reset_Password/password']; } ?>"
          
            />
       
          <label id="icon" for="ConfirmPassword"><i class="fa fa-unlock-alt"></i></label>
       
          <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" required 

             value="<?php if(isset($_SESSION['get-everything.ga/Reset_Password/confirmpassword'])) {  echo $_SESSION['get-everything.ga/Reset_Password/confirmpassword']; } ?>"

            />

            <div class="btn-block">
       
              <button id="submit" name="submit" type="submit">Reset Password</button>
       
            </div>
       
          <br/><br/>
       
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