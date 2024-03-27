<?php 
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("". mysqli_connect_error());
}
?>