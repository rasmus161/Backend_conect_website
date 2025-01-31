<?php

$target_dir = './uploads/';
$target_file = $target_dir . basename($_FILES["file-upload-input"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadsOk = 1;

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file-upload-input"]["tmp_name"]);
    if ($check !== false) {
        echo "file is image - " . $check["mime"];
        $uploadsOk = 1;
    } else {
        echo "file is not an image";
        $uploadsOk = 0;
    }
} else {
    echo "No file uploaded.";
    $uploadsOk = 0;
}

// Check if file already exists, if it does rename it to a random name
if (file_exists($target_file)) {
    $target_file = $target_dir . rand() . '.' . $imageFileType;
}

// Check file size (5 MB max)
if ($_FILES["file-upload-input"]["size"] > 5000000) {
    echo "file is too large (max 5 MB)";
    $uploadsOk = 0;
}

// Only allow certain file formats (jpg, png, jpeg, gif)
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "wrong file format (only jpg, png, jpeg or gif)";
    $uploadsOk = 0;
}

// Check if $uploadsOk is set to 0 by an error
if ($uploadsOk == 0) {
    echo "Sorry, could not upload file";
}

// Attempt to move the uploaded file
if (move_uploaded_file($_FILES["file-upload-input"]["tmp_name"], $target_file)) {
    echo "The file " . htmlentities(basename($_FILES["file-upload-input"]["name"])) . " was successfully uploaded";
    $uploaded_file_path = $target_file;
} else {
    echo "Sorry, there was an error uploading your file.";
}

 // Assuming $uploaded_file_path contains the path of the uploaded file
 if (isset($uploaded_file_path)) {
    echo '<img src="' . $uploaded_file_path . '" alt="Uploaded Image">';
} else {
    echo "No image uploaded.";
    
}
