<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:3000/');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AfCi5e_9uXl-QYO2hEFJH4nZryf7Yy84QR1bIfYEBtp6QKYmIrwv-1fijj6nvSEtBD7_N82jlL-gK_Sy',// ClienteID        
        'EDjcGzhZGhPcAsALj0L90-tiZZCwq22xWXirqs4Xh1SzqHME-VEXiRGcxnZkc3qrHTs4PMo3jYL8S__k'//Secret
    )
);

//var_dump($apiContext);