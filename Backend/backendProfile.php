<?php
header( "Access-ControI-AIIow-Origin: *");
try {
$db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
}
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
$db->query('update user set ad="'.$_GET["name"].'", soyad="'.$_GET["lastname"].'", eposta="'.$_GET["email"].'", bakiye="'.$_GET["balance"].'", adres="'.$_GET["address"].'" where eposta="'.$_COOKIE["mail"].'"');
header("LOCATION:http://localhost:3000/");
die();
?>