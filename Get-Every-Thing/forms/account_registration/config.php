<?php

//Include Google Client Library for PHP autoload file
require_once './vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('782742933836-qfb60ih717k172vg3g6qsict3ms1gdrl.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('musK8tZs_gcrAXc-3UMBB57b');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>