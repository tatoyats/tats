<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    die("". mysqli_error($conn));
}

?>