<?php

$username = test_input($_REQUEST['username_login']);
$password = test_input($_REQUEST['password']);

// write data to session

$_SESSION['name'] = $username; 



