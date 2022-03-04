<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Add a new Trip</title>
</head>
<body>
    <header>
    </header> <?php
            require_once 'HTML/nav.php';
        ?>
    <div class="content">
   
    <div class="container">
        <div class="content-tabel">
            <fieldset>
                <legend >Add a new Trip</legend>
                <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                    <table class='table'>
                        <tr>
                            <th>The Location </th>
                            <td><input class='form-control' type="text" name="location"  placeholder="Location Name" /></td>
                        </tr>
                        <tr>
                            <th>The Photo</th>
                            <td><input class='form-control' type="file" name="picture"  placeholder="Picture Name" /></td>
                        </tr>
                        <tr>
                    
                        
                        <tr>
                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price"  placeholder="Price" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>
                                <textarea class='form-control'  name="description" placeholder="Max 600 characters" rows="4">

                            </textarea></td>
                          </tr>
                            <th>
    
                            </th>
                            <td class="d-flex justify-content-around">
                            <button  class='btn btn-primary fw-bold mt-3'>Insert</button>
                            <a href="index.php" class='btn btn-danger fw-bold   mt-3'>Go Back</a>
                        </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
 </div>
    <?php
        require_once 'HTML/footer.php';
    ?>
</body>
</html>
