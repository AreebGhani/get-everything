<?php

$server = "sql205.epizy.com";
$user = "epiz_29887945";
$password = "r3SsrhsnP8H";
$DataBase = "epiz_29887945_geteverything";

$connect = mysqli_connect($server, $user, $password, $DataBase);

extract($_POST);

if($connect) {
//   echo '<script type="text/javascript"> alert("MYSQL Database Connecting . . .") </script>' ;
};

if (isset($_POST["submit"])) {

    ?>
    <!-- <script>alert("DataBase Connected Successfully . . . ! !");</script> -->
    <?php

    $query = "insert into contactform (Names, Emails, Messages) values ('$name','$email','$message')";
 
    $result = mysqli_query($connect,$query);

    if($result){
    
        ?>
     <script>
        alert("Message Sent . . . ! !");
        location.replace('http://get-everything.ga/home#contact');
     </script>
     <?php
    
    } else {

     ?>
     <script>
        alert("Message Can't Send . . . ! !"); 
        location.replace('http://get-everything.ga/home#contact');
     </script>
<?php
   }

}
?>