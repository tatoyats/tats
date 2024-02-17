<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class = "navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #00ff5573">
Edit User
</nav>

<div class="container">

    <?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        include("db_conn.php");
        $sql = "SELECT * FROM `user` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <div class="container d-flex justify-content-center">
        <form action="update.php?id=<?php echo $row['id']?>" method="post" style="width:50vw; min-width: 300px;">

        <div class="row">
            <div class="col">
                <label class = "form-label">Name:</label>
                <input type ="text" class = "form-control" name = "name"
                value="<?php echo $row['name']?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class = "form-label">Email:</label>
                <input type ="text" class = "form-control" name = "email"
                value="<?php echo $row['email']?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class = "form-label">Password:</label>
                <input type ="text" class = "form-control" name = "password"
                value="<?php echo $row['password']?>">
            </div>
        </div>
       
       
            <button type = "submit" class = "btn btn-success" name = "submit">Update</button>
            <a href = "index.php" class = "btn btn-danger">Cancel</a>
        
    </form>
    
    </div>
    <?php }?>
</div>
    
</body>
</html>