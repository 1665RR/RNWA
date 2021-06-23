<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Novi object o Google API Client-a za poziv Google API
$google_client = new Google_Client();

// OAuth 2.0 Client ID
$google_client->setClientId('48891398467-32r7o93bqte1nm5u82m7hedc3emnosrr.apps.googleusercontent.com');

// OAuth 2.0 Client Secret key
$google_client->setClientSecret('lOHuVirH14L02KnBLalZqG5s');

/* Vas OAuth 2.0 Redirect URI koji ste definirali u odjeljku iznad – ovdje smo promijenili umjesto redirect.php u index.php */
$google_client->setRedirectUri('http://localhost/mvc2/laravel-crud-app/index.php');

// dohvacamo ove podatke s profila
$google_client->addScope('email');

$google_client->addScope('profile');

?>
