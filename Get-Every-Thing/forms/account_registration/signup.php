<?php
 
 session_start();

 ob_start();

 unset($_SESSION['get-everything.ga/signup/name']);
 unset($_SESSION['get-everything.ga/signup/email']);
 unset($_SESSION['get-everything.ga/signup/password']);
 unset($_SESSION['get-everything.ga/signup/confirmpassword']);
 unset($_SESSION['message']);
 
?>

<!DOCTYPE html>

<html lang="en">

  <head>
  
     <title>Sign Up - Get Every Thing</title>

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

    <!-- Sign up PHP Code Start -->
     
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
   
      $Names = mysqli_real_escape_string( $connect, $_POST['Names'] );
      $Emails = mysqli_real_escape_string( $connect, $_POST['Emails'] );
      $Password = mysqli_real_escape_string( $connect, $_POST['Password'] );
      $ConfirmPassword = mysqli_real_escape_string( $connect, $_POST['ConfirmPassword'] );

      $_SESSION['get-everything.ga/signup/name'] = $Names;
      $_SESSION['get-everything.ga/signup/email'] = $Emails;
      $_SESSION['get-everything.ga/signup/password'] = $Password;
      $_SESSION['get-everything.ga/signup/confirmpassword'] = $ConfirmPassword;
  

      $Encrypt_Password = password_hash( $Password, PASSWORD_BCRYPT );
      $Encrypt_ConfirmPassword = password_hash( $ConfirmPassword, PASSWORD_BCRYPT );

      $Token = bin2hex( random_bytes(15) );


      $Check_Name = "select * from registered_users where Names = '$Names' ";
      $Name_Query = mysqli_query( $connect, $Check_Name );
      $Count_Name = mysqli_num_rows($Name_Query);

      $Check_Email = "select * from registered_users where Emails = '$Emails' ";
      $Email_Query = mysqli_query( $connect, $Check_Email );
      $Count_Email = mysqli_num_rows($Email_Query);

      if($Count_Name > 0) {

        unset($_SESSION['get-everything.ga/signup/name']);

        $_SESSION['message'] = "User Already Exist . . . ! !";
  
        } else {
    
          if($Count_Email > 0){
   
            unset($_SESSION['get-everything.ga/signup/email']);
   
           $_SESSION['message'] = "Email Already Taken . . . ! !";
       
          } else {
      
            if($Password === $ConfirmPassword){
      
                $Date = date("d-m-Y");

              $InsertQuerry = "insert into registered_users ( Names, Emails, Password, ConfirmPassword, Date, Token, Status ) values( '$Names', '$Emails', '$Encrypt_Password', '$Encrypt_ConfirmPassword', '$Date', '$Token', 'Active' )";
              $InsertData = mysqli_query( $connect, $InsertQuerry );

              if($InsertData){

                unset($_SESSION['get-everything.ga/signup/name']);
                unset($_SESSION['get-everything.ga/signup/email']);
                unset($_SESSION['get-everything.ga/signup/password']);
                unset($_SESSION['get-everything.ga/signup/confirmpassword']);

            
                   setcookie ( "message", "Account Created Successfully . . . ! !", time()+60, "/" );
                   setcookie( 'email', NULL, time()-2592000 );
                   setcookie( 'password', NULL, time()-2592000 );

                  ?>

                  <script>location.replace('http://get-everything.ga/login');</script>
          
                  <?php

                } else {
        
                $_SESSION['message'] =  "Can't Connect To Server . . . ! !";
        
              }
      
            } else {
      
              unset($_SESSION['get-everything.ga/signup/password']);
              unset($_SESSION['get-everything.ga/signup/confirmpassword']);
        
              $_SESSION['message'] = "Password Are Not Matching . . . ! !";
            
            };
    
          };
  
        };
  
        // setcookie( 'localhost/signup/name', $Names, time()+60 );
        // setcookie( 'localhost/signup/email', $Emails, time()+60 );
        // setcookie( 'localhost/signup/password', $Password, time()+60 );
        // setcookie( 'localhost/signup/confirmpassword', $ConfirmPassword, time()+60 );

      };

    ?>

    <!-- PHP Code End -->
    
    <!-- Sign up Html Code Start -->

    <div class="main-block">
     
      <h1 class="h1">Create Account</h1>

      <!--<div class="container">
      
       <a href="<?php echo $login_google; ?>" style="color:white; margin-right:10px; font-weight:bolder;" class="btn btn-g">Login via<i style="margin-left:8px; margin-right:3px;" class="bi-google"></i></a>
      
       <a href="" style="color:white; margin-left:10px; font-weight:bolder;" class="btn btn-f">Login via<i style="margin-left:8px; margin-right:3px;" class="fa fa-facebook-f"></i></a>
     
      </div>-->

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
    
        <label id="icon" for="Names"><i class="fa fa-user"></i></label>
      
        <input type="text" name="Names" id="Names" placeholder="Name" required

          value="<?php if(isset($_SESSION['get-everything.ga/signup/name'])) {  echo $_SESSION['get-everything.ga/signup/name']; } ?>"
        
        />
    
        <br/>
        
        <label id="icon" for="Emails"><i style="font-size:14px;" class="fa fa-envelope"></i></label>
        
        <input type="text" name="Emails" id="Emails" placeholder="Email" required

          value="<?php if(isset($_SESSION['get-everything.ga/signup/email'])) {  echo $_SESSION['get-everything.ga/signup/email']; } ?>"
        
        />
        
        <label id="icon" for="Password"><i class="fa fa-unlock-alt"></i></label>
        
        <input type="password" name="Password" id="Password" placeholder="Password" required
        
          value="<?php if(isset($_SESSION['get-everything.ga/signup/password'])) {  echo $_SESSION['get-everything.ga/signup/password']; } ?>"

        />
        
        <label id="icon" for="ConfirmPassword"><i class="fa fa-unlock-alt"></i></label>
        
        <input style="margin-top:-10px;" type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" required
        
          value="<?php if(isset($_SESSION['get-everything.ga/signup/confirmpassword'])) {  echo $_SESSION['get-everything.ga/signup/confirmpassword']; } ?>"

        />

        <div class="btn-block">
        
          <p class="h1">By Signing In, you agree on our <a href="http://get-everything.ga/privacy_policy" class="h1">Privacy Policy</a>.</p>
          
          <button id="submit" name="submit" type="submit">Sign Up</button>
        
        </div>
        
        <br/>
        
        <div class="container">
            
          <p class="h1">Already Have An Account..? <span style="margin-right:5%;"></span>
          
            <a href="http://get-everything.ga/login" class="btn">Log In</a>
            
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