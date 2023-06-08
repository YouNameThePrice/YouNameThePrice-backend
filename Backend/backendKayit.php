<?php
header( "Access-ControI-AIIow-Origin: *");
try {
$db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
}
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
if($_GET["sifre"]==$_GET["sifre2"]){
    #kayit et
    $db->query('insert into user (ad,soyad,eposta,sifre) values ("'.$_GET["ad"].'","'.$_GET["soyad"].'","'.$_GET["email"].'","'.$_GET["sifre"].'")');
    header("LOCATION:http://localhost:3000/");
    die();
}
else{
    #kayit etme sifreler farkli
    header("LOCATION:http://localhost:3000/register");
    die();
}
?>