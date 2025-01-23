<?php 

$myfile = fopen("visitors.txt", "w+") or die("unable to open file no2! ");

echo fread($myfile,filesize(("visitors.txt")));
fclose($myfile);

