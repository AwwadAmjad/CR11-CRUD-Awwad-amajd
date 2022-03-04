<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {  
    $id=$_POST["id"]  ;
   $location = $_POST["location"];
   $price = $_POST["price"];
   $description=$_POST["description"];
   $picture = file_upload($_FILES['picture']);
   $uploadError = '';
 
   if ($picture->error===0){
       ($_POST['picture']=='demo.jpg')?: unlink("../pictures/$_POST[picture]");          
       $sql = "UPDATE trips SET location = '$location', price = '$price', description = '$description' WHERE id = {$id}";
   }else{
       $sql = "UPDATE trips SET picture = $picture->fileName, location = '$location', price = '$price', description = '$description' WHERE id = {$id}";
   }    
   if ($conn->query($sql) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :"";
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . $conn->error;
    }   $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
   }else{
   header("location: ../error.php");
}$conn->close();    

?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="HTML/style.css">
       <title>Update</title>
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Update request response</h1>
           </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-warning" type='button'>Back</button></a>
                <a class="btn btn-success" href='../index.php'>Home</a>
            </div>
       </div>
   </body>
</html>