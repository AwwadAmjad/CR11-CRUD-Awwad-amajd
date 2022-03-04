<?php
            require_once 'actions/db_connect.php';
            $sql = "SELECT * FROM trips";
            $result = mysqli_query($conn, $sql);
            
            $layout="";
            if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
                $layout .=" <div class='card m-2 border border-2'style='width: 18rem;'>
                <div id='imgcard'>
                <img src='pictures/{$row['picture']}' class='card-img-top  w-100'height='300'></div>
                <hr>
                <div class='card-body '>
                <h4 class='card-title'>Location:{$row['location']}</h4>
                <h5 class='card-text'>Price : {$row['price']} €</h5> 
                <div class='d-flex '> 
                <a href='delete.php?id={$row['id']}' class='btn btn-danger m-1 '>Delete</a>
                <a href='update.php?id={$row['id']}' class='btn btn-warning m-1'>Update</a>
                <a href='more.php?id={$row['id']}' class='btn btn-info m-1'>More </a>
                </div>
                </div>
                </div>";
            }
            $conn->close();
            }else{
            $layout ="No result";
            }
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>

<!-- Start Nav -->
     <?php require_once "HTML/nav.php"; ?>
<!-- End Nav -->


<!-- Start Hero --> 
     <div class="hero">
    <h1 class="h1 px-5 mt-4 text-center fw-bold">Welcome  <br> we make your Trip!</h1>
    </div>
 <!-- End Hero -->

<!-- Start content -->
    <div class="container">
        <div class="row justify-content-evenly py-2">
            <?php echo $layout;?>
        </div">
    </div> 
<!-- End content -->


<!-- Start Footer -->
    <?php
        require_once "HTML/footer.php";
   ?>
   <!-- End Footer -->
</body>
</html>