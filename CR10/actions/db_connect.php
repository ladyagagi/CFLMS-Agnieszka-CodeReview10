<?php
$host = "localhost";
$username = "root";
$pw = "";
$db = "cr10_Agnieszka_biglibrary";

$conn = mysqli_connect($host, $username, $pw, $db);

if(!$conn) {
    echo "no connection <br>";
} 


?>