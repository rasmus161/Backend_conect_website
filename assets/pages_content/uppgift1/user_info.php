<?php


?>
<html>
<?php

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "<p>First visited : " . $_COOKIE[$cookie_time] . "</p>";
    echo "<p>User name: " . $_COOKIE[$cookie_name] . "</p>";
    echo "<p>User IP address: " . $_SERVER['REMOTE_ADDR'] . "</p>";
}



?>