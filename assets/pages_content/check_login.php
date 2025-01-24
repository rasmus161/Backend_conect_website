<?php

header('Content-Type: application/json');

$response = ['loggedIn' => false];

if (isset($_SESSION['username'])){
    $response['loggedIn'] = true;
}

echo json_encode($response);