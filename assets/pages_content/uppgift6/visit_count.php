<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$fileName = "./assets/pages_content/uppgift6/visit_count.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");

// read fille content into a array
$visits = file_exists($fileName) ? file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];



// check if it is the users first visit or not
$isNewVisitor = true;
foreach ($visits as $visit) {
    $visitParts = explode(" - ", $visit); // separate visit time and ip into a array
    if (count($visitParts) < 2) {
        continue; // skip invalid lines
    }
    list($visitIp, $visitTime) = $visitParts; // set names to the array content
    if ($visitIp == $ip) {
        $isNewVisitor = false;
        break;
    }
}

// unique visit's count

$uniqueIps = [];
foreach ($visits as $visit) {
    $visitParts = explode(" - ", $visit);
    if (count($visitParts) < 2) {
        continue; // skip invalid lines
    }
    $visitIp = $visitParts[0];
    if (!in_array($visitIp, $uniqueIps)) {
        $uniqueIps[] = $visitIp;
    }
}

$uniqueVisitors = count($uniqueIps) + ($isNewVisitor ? 1 : 0);

// add new visitors to the fille + unique visitors count

if ($isNewVisitor) {
    $myfile = fopen($fileName, "a") or die("unable to open file no1! ");

    // write to the fille 
    fwrite($myfile, "$ip - $time\n");
    fwrite($myfile, "$uniqueVisitors unique visitors have visited your site\n");


    // close  the fille
    fclose($myfile);
}
