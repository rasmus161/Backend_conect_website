<?php





// clear the user session
session_unset();
session_destroy();


// clear the login cookie
setcookie('login', '', time() - 3600, "/");


// Redirect to the  login page
header("refresh: 0; url = https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/assets/pages/login.php");
exit();