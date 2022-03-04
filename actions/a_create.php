<?php
require_once "db_connect.php";
require_once "file_upload.php";




if ($_POST) {  
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description=$_POST['description'];
    $uploadError = '';
    $picture = file_upload($_FILES['picture']);  
  
    $sql = "INSERT INTO trips (location, price, picture,description) VALUES ('$location', $price, '$picture->fileName','$description')";
 
    if ($conn->query($sql) === true ) {
        $class = "success";
        $message = "The entry below was successfully created <br>
             <table class='table w-50'><tr>
             <td> $location </td>
             <td> $price </td>
             <td> $description</td>
             </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $conn->close();
 } else {
    header("location: ../error.php");
 }
 ?>
 
 
 <!DOCTYPE html>
 <html lang= "en">
    <head>
        <meta  charset="UTF-8">
        <link rel="stylesheet" href="../HTML/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Create</title>
    </head>
    <body>
        <?php require_once  "../HTML/nav.php"; ?>
        <div  class="container">
            <div class="mt-3 mb-3" >
                <h1>Create request response</h1>
            </div>
             <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                 <p><?php echo ($uploadError) ?? ''; ?></p>
                 <a class="btn btn-primary"href='../index.php'>Home</a>
            </div >
        </div>
        <?php require_once  "../HTML/footer.php"; ?>

    </body>
 </html>