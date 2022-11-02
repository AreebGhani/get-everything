<?php

 session_start();
 
 unset($_SESSION['Token']);
 
 setcookie( 'get-everything.ga/Email', NULL, time()-2592000 );
 
 setcookie( 'get-everything.ga/Password', NULL, time()-2592000 );
 
 header('location:http://get-everything.ga/login');
 
?>