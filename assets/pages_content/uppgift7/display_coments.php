<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$file = 'comments.json';

if(file_exists($file)){
    $comments =  json_decode(file_get_contents($file), true);

    if ($comments){
        foreach ($comments as $comment){
            
            echo '<div class="comment">';
            echo '<p><strong>' . htmlspecialchars($comment['chatName']) . '</strong> at ' . htmlspecialchars($comment['chatTime']) . '</p>';
            echo '<p>' . htmlspecialchars($comment['comment']) . '</p>';
            echo '</div>';
        }
    }else {
        echo '<p>No comments found.</p>';
    }
}