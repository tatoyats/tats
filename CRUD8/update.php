<?php
include("db_conn.php");
if(isset($_POST["submit"])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql = "UPDATE `user` SET `name`='$name', `email`='$email', `password`='$password' 
    WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php?msg=Record Updated");
    }
}
?>