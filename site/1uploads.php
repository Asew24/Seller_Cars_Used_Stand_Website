<?php
if (isset($_POST['ft_submit'])) {
    $file = $_FILES['file_ft'];



    $fileName = $_FILES['file_ft']['name'];
    $fileTmpName = $_FILES['file_ft']['tmp_name'];
    $fileSize = $_FILES['file_ft']['size'];
    $fileError = $_FILES['file_ft']['error'];
    $fileType = $_FILES['file_ft']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if ($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ./?uploadsuccess");
            }else{
                echo "Your file was too big!";
            }
        }else{
            echo "There was a error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }
}