<?php
header( "Access-ControI-AIIow-Origin: *");
try {
$db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
}
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}

setcookie('mail', '', time() - 3600, '/');
setcookie('sifre', '', time() - 3600, '/');
// Unset the cookie variable (optional)
unset($_COOKIE['mail']);
unset($_COOKIE['sifre']);
header("LOCATION:http://localhost:3000/");
die();
?>