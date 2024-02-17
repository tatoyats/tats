<?php
include("db_conn.php");
if(isset($_POST["submit"])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $file_name = $_FILES['image']['name'];
   $tempname = $_FILES['image']['tmp_name'];
   $folder = 'img/'.$file_name;
   move_uploaded_file($tempname,$folder);

    mysqli_query($conn, "INSERT INTO `user` (`image`, `name`,`email`,`password`)
    VALUES ('$file_name', '$name', '$email', '$password')");
  
    header("Location: index.php?msg=New User Recorded");
    
}
?>