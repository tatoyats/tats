<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src = "https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body class="bg-dark-subtle">

   <nav class = "navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fuid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Action</a></li>
                            <li><a class="dropdown-item" href="">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true" href="">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 position-relative top-0 start-100" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary position-relative top-0 start-100" type="submit">Search</button>
                </form>
            </div>
        </div>
   </nav>
   
   <div class="container">
    <table class="table table-hover text-center mt-3">
        <thead class="table-dark mb-5">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Date to Depart</th>
                <th scope="col">Airline</th>
            </tr>
        </thead>

        <?php 
        include("db_conn.php");
        $sql = "SELECT * FROM `flight`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tbody class ="fw-normal table-striped">
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['from_place']?></td>
                <td><?php echo $row['to_place']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['plane']?></td>
            </tr>
        </tbody>
        <?php }?>
    </table>


        <div class="card p-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div>
   </div>



    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src = "script.js"></script>
</body>
</html>