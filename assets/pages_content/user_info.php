<?php

$cookie_name = "user";
$cookie_value = "rase";
$cookie_time = "first_visit_time";

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    setcookie($cookie_time, date("Y-m-d H:i:s"), time() + (86400 * 30), "/");
}
?>
<html>
<?php

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "First visited : " . $_COOKIE[$cookie_time] . "<br>";
    echo "<p>User name: " . $_COOKIE[$cookie_name] . "</p>";
    echo "<p>User IP address: " . $_SERVER['REMOTE_ADDR'] . "</p>";
}

?>