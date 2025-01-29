<?php

// Start the session
session_start();



// set users cookies 

$cookie_name = "user"; // add test_input obs!!
$cookie_value = "rase";
$cookie_time = "first_visit_time";

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    setcookie($cookie_time, date("Y-m-d H:i:s"), time() + (86400 * 30), "/");
}

// input data validator
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


