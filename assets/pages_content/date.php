<?php
// todays date
// had to change to swedish time to get swedis time to change language consider fixing this in a bether way
setlocale(LC_TIME, 'sv_SE.UTF-8');
echo strftime("%A den %e %B", strtotime("today"));

// calculate and print the week number
$weekNumber = date("W");
echo " (Vecka $weekNumber)";


