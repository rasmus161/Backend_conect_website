<?php




// this is not the best plase to have this but fore some reason brakes if it is located in a different lotion
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Sanitize input
$usernameLogin = test_input($_REQUEST['username-login']);
$password = test_input($_REQUEST['password']);


// write data to session

$_SESSION['name'] = $usernameLogin;
$_SESSION['psw']  = $password;





// Check if session and cookie are set
if (isset($_COOKIE['first_visit_time'], $_SESSION['name'])) {
    echo "<h2>Welcome back! " . $_SESSION['name'] . " You visited us for the first time in " . $_COOKIE['first_visit_time'] . "</h2>";
} else {
    echo "error loading message ";
}


// Check login success
if (isset($_SESSION['name'], $_SESSION['psw']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginSuccess = true;
}


if ($loginSuccess) {
    setcookie('login', 'true', time() + (86400 * 365 * 10), "/"); 
    header("refresh: 3; url = https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/assets/pages/profile.php");
    
    
}
