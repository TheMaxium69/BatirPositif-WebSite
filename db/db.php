<?php

$host = "localhost";
$userDB = "toor";
$passDB = "toor";
$Database = "batirpositif";

//MySQLi
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);

//PDO
try{
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
}catch(PDOEXeption $e){
    echo $e;
}

?>


