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
    <title>Delete</title>
</head>
<body>
    <?php require_once "HTML/nav.php"; ?>
    <div class="container">
    <fieldset>
           <legend class='h2 mb-3'> Delete request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $data['picture'] ?>' alt="<?php echo $data['price'] ?>"></legend >
           <h5>You have selected the data below: </h5>
           <table class="table w-75 mt-3" >
               <tr>
                    <td><?php echo   $data['location']?></td>
                </tr>
           </table>

           <h3  class="mb-4">Do you really want to delete this product?</h3>
           <form action ="actions/a_delete.php"  method="post">
               <input type="hidden"  name="id" value ="<?php echo $id ?>" />
               <input type="hidden"  name="picture"  value="<?php echo $data['picture'] ?>" />
               <button class="btn btn-danger"  type="submit"> Yes, delete it! </button>
                <a class="btn btn-warning" href="index.php">No, Go back! </a >
           </form>
       </fieldset>
    </div>
    <?php
        require_once 'HTML/footer.php';
    ?>
</body>
</html>