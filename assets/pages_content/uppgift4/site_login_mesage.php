<?php



$_SESSION['name'] = $_REQUEST['username']; 




if (isset($_COOKIE['first_visit_time'],$_SESSION['name'])) {
    echo "<h2>Welcome back! " . $_SESSION['name'] ." You visited us for the first time in ". $_COOKIE['first_visit_time']."</h2>";
} else {
    echo "First visit time cookie is not set.";
}
