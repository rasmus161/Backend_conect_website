<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$fileName = "visit_count.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");

// read fille content into a array
$visits = file_exists($fileName) ? file(FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

// check if it is the users first visit or not
$isNewVisitor = true;
foreach ($visits as $visits) {
    list($visitIp, $visitTime) = explode(" - ", $visit); // separate visit time and ip
    if ($visitIp == $ip) {
        $isNewVisitor  = false;
        break;
    }
}

// add new visitors to the fille

if ($isNewVisitor) {
    $myfile = fopen("visit_count.txt", "a") or die("unable to open file no5! ");

    // write to the fille 
    fwrite($myfile, "$ip - $time\n");

    // close  the fille
    fclose($myfile);
}

// show amount of unique visitors
$uniqueVisitors = count($visits) + ($isNewVisitor ? 1 : 0);
echo "Unique visitor count: $uniqueVisitors";