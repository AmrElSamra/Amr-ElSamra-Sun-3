<?php
session_start();
// if (isset($_SESSION['data'])) {
//     foreach ($_SESSION['data'] as $key => $value) {
//         echo "$key: $value <br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Data</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <div class="container mt-5">
        <h1>Json Data</h1>
       <ul>
        <?php
            if (isset($_SESSION['data'])) {
            foreach ($_SESSION['data'] as $key => $value) {
        ?>
            <li class="text-capitalize">
                <strong><?php echo "$key:";?></strong>
                <?php echo $value; ?></li>
        <?php }} ?>

        </ul>
        <button class="btn btn-primary btn-lg"><a href="upload-json.php" class="text-white">Back</a></button>
    </div>
    







    <script src="JS/jquery-3.5.1.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>

</html>