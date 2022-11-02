// <?php

//   include('./config.php');

//     if(isset($_SESSION['access_token'])) {
   
//       $google_client->revokeToken();
   
//     }

// ?>

<?php

 session_start();

 session_destroy();

?>

<script>
  
  history.back(-1);

</script>