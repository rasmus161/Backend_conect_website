<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$chatUserName = $_SESSION['name'];
$chatTime = date("Y-m-d H:i:s");
$comment = htmlspecialchars($_POST['comment']);

$data = [
    'chatName' => $chatUserName,
    'comment' => $comment,
    'chatTime' => $chatTime

];

$file = 'comments.json';
$comments = [];

// Read the existing comments from the file and decode the JSON data into an array
if (file_exists($file)) {
    $comments = json_decode(file_get_contents($file), true);
    if (!is_array($comments)) {
        $comments = [];
    }
}

// add the new comment to the beginning of the array
array_unshift($comments, $data);

// Encode the comments array back to JSON and save it to the file
file_put_contents($file, json_encode($comments));

// Redirect the user back to the previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>