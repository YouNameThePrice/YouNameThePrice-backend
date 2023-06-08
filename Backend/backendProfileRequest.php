<?php
header('Access-Control-Allow-Origin: http://localhost:3000'); // Replace with the actual URL of your React application
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

try {
        $db = new PDO( 'mysql:host=localhost;dbname=younametheprice','root','');
    }
catch(PDOException $e){
    die($e->getMessage());
    $data = json_decode(file_get_contents( ' php://input ' ));
}
echo $_COOKIE["mail"];
if(isset($_COOKIE["mail"])){
    $mail=$_COOKIE["mail"];
}
$query = 'select ad,soyad,eposta,bakiye,adres from user where eposta="'.$mail.'"';
$statement = $db->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$jsonData = json_encode($results);
echo $jsonData;// Convert the results to JSON

// Echo the JSON response
//echo $json;
?>