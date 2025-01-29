<?php

// clear the user session
session_unset();
session_destroy();

// clear the user cookie
setcookie('user', '', time() - 3600, "/");


// Redirect to the homepage or login page
header("https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/assets/pages/login.php");
exit();