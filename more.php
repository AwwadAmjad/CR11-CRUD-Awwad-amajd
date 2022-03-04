<?php
require_once 'actions/db_connect.php'; 



if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trips WHERE id = $id" ;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)== 1) {
        $data=mysqli_fetch_assoc($result);
    } else {
        header("location: error.php");
    }
    $conn->close();
 } else {
    header( "location: error.php");
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
 
</head>
<body>
    <header>
    </header>
    <div class="d-flex justify-content-center align-items-center mt-5 mb-2"
     style="background-image: url(pictures/<?php echo $data["picture"]?>); height: 40vh; 
     background-size: contain; background-repeat: no-repeat; background-position: center;">
    </div>
    <div class="container">
        <div class="class=d-flex flex-column align-items-center py-2">
            <table class='table border border-4-light'>
                <tr>
                    <th class="h1 fw-bold ">Location :</th>
                    <td class="h4 text-center "><?php echo $data['location']?></td>
                </tr>
                <tr>
                    <th class="h1 fw-bold ">Price :</th>
                    <td class="h4 text-center "><?php echo $data['price'] ?> €</td>
                </tr>
                <tr>
                    <th class="h1 fw-bold ">Description:</th>
                    <td class="h4 text-center "> <?php echo $data['description']?> </td>
                </tr>
                
            </table>
            <div class="d-flex justify-content-center my-3">
                <a href="index.php" class='btn btn-danger'>Back</a>
            </div>
        </div>
    </div>
    <?php
        require_once 'HTML/footer.php';
    ?>
    
</body>
</html>