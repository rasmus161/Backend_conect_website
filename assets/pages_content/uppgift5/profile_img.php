<?php
// dell me later no php errors to frontend not god later remember meee !!!!
error_reporting(E_ALL);
ini_set('display_errors', 1);

// the script is not finding the uploads folder ?

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file-upload-input"]["name"]);

$uploadsOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// check for fille format 
// getimagesize does not like filles with allot of numbers??

if (isset($_POST["submit"])) {
    if (!empty($_FILES["file-upload-input"]["tmp_name"])) {
        $check = getimagesize($_FILES["file-upload-input"]["tmp_name"]);

        if ($check !== false) {
            echo "file is image - " . $check["mime"];
            $uploadsOk = 1;
        } else {
            echo "fille is not a img";
            $uploadsOk = 0;
        }
    } else {
        echo "No file uploaded.";
        $uploadsOk = 0;
    }


    // check if  file already exist if it does rename it to a random name
    if (file_exists($target_file)) {
        $target_file = $target_dir . rand() . '.' . $imageFileType;
    }


    //check file size 5 MB max
    if ($_FILES["file-upload-input"]["size"] > 5000000) {
        echo "file is to large (max 5 MB)";
        $uploadsOk = 0;
    }

    // only alow cretan file format (jpg, png, jpeg, gif)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "wrong fle format (only jpg, png, jpeg or gif)";
        $uploadsOk = 0;
    }

    // check if $uploadsOk  is set 0 by something not passing a check or if all checks passed and upload the file
    if ($uploadsOk == 0) {
        echo "Sorry, could not upload file";
    } else {
        if (move_uploaded_file($_FILES["file-upload-input"]["tmp_name"], $target_file)) {
            echo "The file " . htmlentities(basename($_FILES["file-upload-input"]["name"])) . " was successfully uploaded";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
