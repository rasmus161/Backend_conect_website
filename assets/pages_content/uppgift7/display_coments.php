<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$file = 'comments.json';

if(file_exists($file)){
    $comments =  json_decode(file_get_contents($file), true);

    if ($comments){
        foreach ($comments as $comment){
            echo "". htmlspecialchars($comment['chatTime']) . htmlspecialchars($comment['chatName']). htmlspecialchars($comment['comment']) ;
        
        }
    }
}