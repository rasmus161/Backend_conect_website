<?php


if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Guest';
}
echo "$username";