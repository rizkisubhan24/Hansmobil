<?php
$host = "localhost";
$user = "root";
$pass ="1234567890";
$db = "hansMobil";
$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect){
    die ("connection failed". mysqli_connect_error());
}

?>