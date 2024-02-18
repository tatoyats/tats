<?php 
include("db_conn.php");
if(isset($_POST["submit"])){
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $birth = date('Y-m-d', strtotime($_POST['birthday']));
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'img/'.$file_name;
    move_uploaded_file($tempname,$folder);

    mysqli_query($conn, "INSERT INTO `user`(`image`, `last_name`, `first_name`, `mid_name`, `birthday`)
    VALUES ('$file_name', '$last_name', '$first_name', '$mid_name', '$birth')");

    header("Location: index.php?msg=New User Added");
}
?>