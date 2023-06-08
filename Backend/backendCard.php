<?php
header( "Access-ControI-AIIow-Origin: *");
try {
$db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
}
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
$urun=$_GET["urun"];
$fiyat=$_GET["fiyat"];
$query =$db->query('insert into sepet (email,sifre,urun_isim,urun_fiyat) values ("'.$_COOKIE["mail"].'","'.$_COOKIE["sifre"].'","'.$urun.'","'.$fiyat.'")');
$data = [
    'name' => 'John Doe',
    'age' => 30,
    // Other data...
  ];
  
  // Return the data as a JSON response
  header("LOCATION:http://localhost:3000/favorite");
  echo json_encode($data);

?>