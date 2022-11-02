<?php

 session_start();

$server = "sql205.epizy.com";
$user = "epiz_29887945";
$password = "r3SsrhsnP8H";
$DataBase = "epiz_29887945_geteverything";

 $connect = mysqli_connect($server, $user, $password, $DataBase);

 if($connect) {
  
  ?>
  
  <!-- <script>alert("DataBase Coonected Successfully . . . ! !");</script> -->
  
  <?php
 
 };

 if(isset($_GET['Token'])){
 
     $Token = $_GET['Token'];
     $Change_Status = "update registered_users set Status = 'Active' where Token = '$Token' ";
     $Update_Query = mysqli_query($connect, $Change_Status);
  
     if($Update_Query){
  
         if(isset($_SESSION['message'])){
  
             setcookie( "message", "Your Account Activated <br/> Successfully . . . ! !", time()+60, "/" );
  
             header('location:http://get-everything.ga/login');
  
            } else {
        
             $_SESSION['message'] = "Your Are Logged Out . . . ! !";
             header('location:http://get-everything.ga/login');
            };
     
        } else {
            
            setcookie( "message", "Your Account Can't be Activated . . . ! !", time()+60, "/" );

         header('location:http://get-everything.ga/login');
     
        };
 
    }else {
            
        setcookie( "message", "Sorry Can't Get Token . . . ! !", time()+60, "/" );

     header('location:http://get-everything.ga/login');
 
    };

?>