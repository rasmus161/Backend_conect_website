<?php
session_start();
if (isset($_SESSION['name'])) {
    $usernamep = $_SESSION['name'];
} else {
    $usernamep = 'Guest';
}
echo "$usernamep";

