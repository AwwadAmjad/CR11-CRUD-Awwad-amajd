<?php
require_once 'actions/db_connect.php';

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM trips WHERE id =$id"; 
      $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1) { 
        $data = mysqli_fetch_assoc($result);
    } else {
        header( "location: error.php");
    }
    $conn->close();
 } else {
    header("location: error.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update </title>
</head>
<body>
<header>
    </header>
     <?php require_once 'HTML/nav.php';?>
     <fieldset class="container">
          <h1 class="text-center fw-bold mt-3">Update request</h1>
               <img class='img-rounded-circle mb-5 p-5'  src='pictures/<?php echo $data["picture"]?>'>
           <form action ="actions/a_update.php"  method="POST"  enctype="multipart/form-data">
                <table class="table">
                   <tr>
                       <th>Location</th>
                       <td><input class ="form-control" type="text"   name="location" placeholder  ="Product Name" value="<?php echo $data["location"] ?>" /></td>
                   </tr>
                   <tr>
                       <th>Price</th>
                        <td><input   class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="<?php echo $data["price"] ?>" /></td>
                   </tr>
                   <th>Description</th>
                            <td>
                                <textarea class='form-control' type="text" name= "description" value="<?php echo $data["description"] ?>" placeholder="Max 600 characters" rows="4">

                            </textarea></td>
                   <tr>
                       <th>The Photo</th >
                       <td><input class= "form-control" type="file"  name= "picture" value ="<?php echo $data['picture']?>" /></td>
                   </tr>
                   <tr>
                       <input type= "hidden"  name= "id"  value= "<?php echo $id?>" />
                       <input type= "hidden"  name= "picture"  value= "<?php echo $data['picture'] ?>"/>
                       <td><button class ="btn btn-success" type = "submit">Save Changes</button></td>
                       <td><a href= "index.php" class ="btn btn-warning" type ="button">Back </a ></td>
                   </tr>
               </table>
           </form>
       </fieldset>

    <?php require_once 'HTML/footer.php';?>
</body>
</html>                       