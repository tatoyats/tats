<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class ="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color: #00ff5573">
    User List
</nav>
    
    <div class="container">
        <a href = "add_user.php" class="btn btn-dark mb-3">Add New</a>

        <table class = "table table-hover text-center">
            <thead class = "table-dark">
                <tr>
                    <td scope = "col">Profile</td>
                    <td scope = "col">Last Name</td>
                    <td scope = "col">First Name</td>
                    <td scope = "col">Middle Name</td>
                    <td scope = "col">Date of Birth</td>
                    <td scope = "col">Date Registered</td>
                    <td scope = "col">Action</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                include("db_conn.php");
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <th><img src="img/<?php echo $row['image']?>"></th>
                        <th><?php echo $row['last_name']?></th>
                        <th><?php echo $row['first_name']?></th>
                        <th><?php echo $row['mid_name']?></th>
                        <th><?php echo $row['birthday']?></th>
                        <th><?php echo $row['created']?></th>
                        <td>
                        <a href = "edit.php?id=<?php echo $row['id']?>" class = "link-dark"><i class = "fa-solid
                        fa-pen-to-square fs-5 me-3"></i></a>
                        <a href = "delete.php?id=<?php echo $row['id']?>" class = "link-dark"><i class = "fa-solid fa-trash">                        
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>