<?php
header( "Access-ControI-AIIow-Origin: *");

try {
        $db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
    }
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
$urunisim = "";
$fiyat = "";

if(isset($_GET["urunisim"]) && isset($_GET["fiyat"])){
    $urunisim = $_GET["urunisim"];
    $fiyat = $_GET["fiyat"];
    echo $urunisim . $fiyat . "daa";
}

#kayit et
$db->query('insert into sepet (email,sifre,urun_isim,urun_fiyat) values 
("'."suat@suat"/*$_SESSION["email"]*/.'","'."1234"/*$_SESSION["sifre"]*/.'","'.$urunisim.'","'.$fiyat.'")');
#header("LOCATION:http://localhost:3000/");
#die();
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>