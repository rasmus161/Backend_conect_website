<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
// remember user data sanitation from the initla php file use it reminder!!!!




$chatUserName = "Kale";
$chatTime = date("Y-m-d H:i:s");


$commentsFile = 'comments.txt';
$comments = [];


// read fille content into a array
$fileExists = file_exists($commentsFile) ? file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];



    // write to the fille 
    fwrite($commentsFile, "testing " . $chatTime . " - " . $chatUserName . ": " . "hello\n");
   


    // close  the fille
    fclose($commentsFile);
