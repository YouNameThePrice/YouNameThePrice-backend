<?php
header( "Access-ControI-AIIow-Origin: *");
try {
$db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
}
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
/*
switch ($action){
// todoları listele
    case 'todos':

    break;
}*/
$query =$db->query('select * from user where eposta="'.$_GET["mail"].'" and sifre="'.$_GET["sifre"].'"');
$sira=0;
foreach($query as $row){
    echo $row['eposta'];echo"<br />";
    $sira+=1;
}
if ($sira>0){
    #giris yapildi
    header("LOCATION:http://localhost:3000/");
    die();
}
else{
    #giris yapilamadi
    header("LOCATION:http://localhost:3000/register");
    die();
}
?>