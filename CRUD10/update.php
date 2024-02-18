

<?php 
include("db_conn.php");
if(isset($_POST["submit"])){
    $id = $_GET['id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $birth = date('Y-m-d', strtotime($_POST['birthday']));
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'img/'.$file_name;
    move_uploaded_file($tempname,$folder);

   

    $sql = "UPDATE `user` SET `image`='$file_name', `last_name`='$last_name', `first_name`='$first_name',
    `mid_name`='$mid_name', `birthday`='$birth' WHERE id = $id LIMIT 1";

   

   
    

$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record Updated");
}

else{
    echo "Error: " . mysqli_error($conn);
}
}
?>
