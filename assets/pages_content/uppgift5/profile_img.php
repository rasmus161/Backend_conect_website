<?php
// dell me later no php errors to frontend not god later remember meee !!!!
error_reporting(E_ALL);
ini_set('display_errors', 1);

$target_dir = "../../uploads/";
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
}
