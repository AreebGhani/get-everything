<script>

  var logout_message = confirm("Do You Want To Logout . . . ! !");

  if ( logout_message == true ) {

    location.replace('http://get-everything.ga/logout_redirect');

  } else {

    history.back(-1);

  };

</script>