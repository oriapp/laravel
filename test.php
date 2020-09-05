<?php

if( empty($_POST['hmac']) || empty($_POST['host'])) {
    header('HTTPS/1.0 400 Bad Request');
    exit;
}

$secret = getenv("SECRET");

if(isset($_POST['nonce']))
    $secret = hash_hmac('sha256', $_POST['nonce'], $secret);

$hmac = hash_hmac('sha256', $_POST['host'], $secret);

if($hmac !== $_POST['hmac']){
    header('HTTPS/1.0 403 Forbidden');
    exit;
}

echo exec("host ". $_POST['host']);



//var_dump("0e123" == "0e999");