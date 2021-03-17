<?php

   session_start();

    if (isset($_POST['submit'])) {
        $file = $_FILES['fileName'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

        $errors=[];
        if ($fileError != 0){
            $errors[]="Error while uploading the file";
        } elseif ($fileExt != "json"){
            $errors[]="File must be a json";
        }

        if(empty($errors)){
            $randomStr = uniqid();
            $fileNewName = "$randomStr.$fileExt";
            move_uploaded_file($fileTmpName, "uploads/$fileNewName");
            $readFile = fopen("uploads/60479bec44d70.json", "r");
            $readFileData = fread($readFile, filesize("uploads/60479bec44d70.json"));
            $arrReadFileData = json_decode($readFileData, true);
            $_SESSION['data'] = $arrReadFileData;
            header("location: display.php");
        } else{
            $_SESSION['errors'] = $errors;
            header("location: upload-json.php");
        }








    }


?>
 