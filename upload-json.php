<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <div class="container mt-5">
      <form action="handle-upload-json.php" method="post" enctype="multipart/form-data" class="form-group">
        <input type="file" name="fileName" class="form-control">

        <?php if (! empty( $_SESSION["errors"])){ ?>
              <div class="alert alert-danger mt-4">
              <?php
                    if (isset($_SESSION["errors"])){
                      foreach ($_SESSION['errors'] as $errorsItem){
                          echo $errorsItem;
                      }
                    }
                    unset($_SESSION["errors"]);
              ?>
          </div>
           <?php } ?>
        
        <div class="text-center">
            <input type="submit" value="Upload" name="submit" class="btn btn-primary btn-lg my-4">
        </div>
      </form>
  </div>





    <script src="JS/jquery-3.5.1.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>

</html>