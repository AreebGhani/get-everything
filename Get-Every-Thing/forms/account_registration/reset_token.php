<?php

 session_start();

 if(isset($_GET['Token'])) {

    $_SESSION['Token'] = $_GET['Token'];

    header('location:http:/localhost/reset_password');

  } else {
      ?>
     
     <script>alert("Token Not Found . . . ! !");</script>
     <script>location.replace('http://localhost/recover_email');</script>
     
     <?php
  }

?> 