<?php 

$myfile = fopen("visitors.txt", "a") or die("unable to open file no4! ");

// write to the fille 
$ip = $_SERVER['REMOTE_ADDR'];

fwrite($myfile, $ip);
fclose($myfile);



