<?php

$_SESSION['name'] = "test_name";

echo "whelcome " . $_SESSION['name'] . "!";



if (isset($_COOKIE['first_visit_time'])) {
    echo "<h2>Welcome back! " . $_COOKIE['user'] ." You visited us for the first time in ". $_COOKIE['first_visit_time']."</h2>";
} else {
    echo "First visit time cookie is not set.";
}
