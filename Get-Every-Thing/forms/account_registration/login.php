<?php

 session_start();
 
 ob_start();

 unset($_SESSION['get-everything.ga/login/email']);
 unset($_SESSION['get-everything.ga/login/password']);
 unset($_SESSION['message']);
 
?>

<!DOCTYPE html>

<html lang="en">

  <head>
  
     <title>Login - Get Every Thing</title>

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

     <!-- Log in PHP Code Start -->
     
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
        
         $Emails = $_POST['Emails'];
         $Password = $_POST['Password'];
   
         $_SESSION['get-everything.ga/login/email'] = $Emails;
         $_SESSION['get-everything.ga/login/password'] = $Password;
         setcookie( 'recover_email', $Emails, time()+60 );

         $Search_Email =  "select * from registered_users where Emails = '$Emails' ";
       
         $Query = mysqli_query( $connect, $Search_Email );
       
         $Count_Emails = mysqli_num_rows($Query);
   
         if($Count_Emails > 0){ 
         
           $Pass_Emails = mysqli_fetch_array($Query);
           $Check_Status = $Pass_Emails['Status'];
           $Password_DataBase = $Pass_Emails['Password'];
   
             if($Check_Status === 'Active'){
   
               $Password_Decode = password_verify($Password, $Password_DataBase);
             
                if($Password_Decode){

                  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) ) {
                  
                   $SecretAPIkey = '6LdXNI0cAAAAANzPOMtgpSdkdPby_GjQ0c934qdV';

                   $VerifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$SecretAPIkey.'&response='.$_POST['g-recaptcha-response']);
                  
                   $Response = json_decode($VerifyResponse, true);

                    if($Response['success'] === true) {

                      if(isset($_POST['RememberMe'])){
  
                       setcookie( 'email', $Emails, time()+2592000 );
                       setcookie( 'password', $Password, time()+2592000 );
                       $_SESSION[ 'get-everything.ga/logout' ] = "Logout";

                       unset($_SESSION['get-everything.ga/login/email']);
                       unset($_SESSION['get-everything.ga/login/password']);
                       unset($_SESSION['message']);

                       ?>
                        <script>

                         alert("Login Successfully . . . ! !");

                         location.replace('http://get-everything.ga/home');

                        </script>
                       <?php

                      } else {

                       setcookie( 'email', NULL, time()-2592000 );
                       setcookie( 'password', NULL, time()-2592000 );

                       unset($_SESSION['get-everything.ga/login/email']);
                       unset($_SESSION['get-everything.ga/login/password']);
                       unset($_SESSION['message']);

                       $_SESSION[ 'get-everything.ga/logout' ] = "Logout";

                       ?>
                        <script>

                         alert("Login Successfully . . . ! !");

                         location.replace('http://get-everything.ga/home');

                        </script>
                       <?php

                      };

                    } else {

                      if(isset($_COOKIE['email'])) {
                        unset($_SESSION['get-everything.ga/login/email']);
                      };
  
                      if(isset($_COOKIE['password'])) {
                        unset($_SESSION['get-everything.ga/login/password']);
                      };

                      $_SESSION['message'] = "reCAPTCHA Verification Failed . . . ! !";
                      ?>
                      <script>location.replace('http://get-everything.ga/login');</script>
                      <?php
                    };
                
                  } else {
                   
                    if(isset($_COOKIE['email'])) {
                      unset($_SESSION['get-everything.ga/login/email']);
                    };

                    if(isset($_COOKIE['password'])) {
                      unset($_SESSION['get-everything.ga/login/password']);
                    };

                    $_SESSION['message'] = "Please Check The reCAPTCHA . . . ! !";
                  
                  };
                  
                } else {

                   if(isset($_COOKIE['email'])) {
                     unset($_SESSION['get-everything.ga/login/email']);
                    };
                    unset($_SESSION['get-everything.ga/login/password']);
           
                   ?>
               
                   <script>alert("Password Incorrected . . . ! !");</script>
               
                   <?php

                   $_SESSION['message'] = "Forget Your Password..? <a href='http://get-everything.ga/recover_email'><u> Reset It</u></a>";
           
                };
           
            } else {
           
              if(isset($_COOKIE['email'])) {
                unset($_SESSION['get-everything.ga/login/email']);
              };

              if(isset($_COOKIE['password'])) {
                unset($_SESSION['get-everything.ga/login/password']);
              };
             
              $_SESSION['message'] = "Please Activate Your Account . . . ! !";
           
           };
        
        } else {
        
            unset($_SESSION['get-everything.ga/login/email']);
        
            unset($_SESSION['get-everything.ga/login/password']);
         
            $_SESSION['message'] = "Email Doesn't Exist. <br/> Please Create Your Account . . . ! !";
         
        
        };
       
       };
    
     ?>

  <!-- PHP Code End -->
    
  <!-- Log in Html Code Start -->

      <div class="main-block">
     
         <h1 class="h1">Login Your Account</h1>

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
            } else {

             if(isset($_COOKIE['message'])) {
              
               ?>

                <div class="container" style="margin-top:-20px;padding-left:30px;padding-right:30px;">
          
                 <p style="text-align:center;background-color:yellowgreen;color:red;padding:10px;font-weight:900;">
              
                   <?php echo $_COOKIE['message']; ?>
                
                 </p>
          
                </div>

               <?php  
              };
            
            };
            ?>

          <form method="POST">

          <label id="icon" for="Emails"><i style="font-size:14px;" class="fa fa-envelope"></i></label>
       
          <input type="text" name="Emails" id="Emails" placeholder="Email" required

              value="<?php 
              
                if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } else { if(isset($_SESSION                                       ['get-everything.ga/login/email'])) {  echo $_SESSION['get-everything.ga/login/email']; } };
              
              ?>"
       
          />
       
          <label id="icon" for="Password"><i class="fa fa-unlock-alt"></i></label>
       
          <input type="password" name="Password" id="Password" placeholder="Password" required
       
             value="<?php  
              
                if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } else { if(isset($_SESSION                                 ['get-everything.ga/login/password'])) {  echo $_SESSION['get-everything.ga/login/password']; } };
                 
              ?>"
    
          />
       
            <div class="container">
        
                <label style="cursor:pointer;">
        
                  <input type="checkbox"  checked="checked" id="RememberMe" name="RememberMe"> Remember Me
        
                </label>
      
            </div>

            <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LdXNI0cAAAAAARJodmT53CvCLYy0eNDQCDDLly5"></div>

           <div class="btn-block">
       
             <p class="h1">By logging In, you agree on our <a href="http://get-everything.ga/privacy_policy" class="h1"> Privacy Policy</a>.</p>
         
             <button id="submit" name="submit" type="submit">Log In</button>
       
            </div>
    
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

  <script src='http://get-everything.ga/geteverything/recaptcha_api.js' async defer></script>

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