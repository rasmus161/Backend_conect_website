<?php





$file = __DIR__ . '/comments.json'; // Ensure the correct path to comments.json
$commentsText = '';

if (file_exists($file)) {
    $comments = json_decode(file_get_contents($file), true);

    if (is_array($comments)) {
        foreach ($comments as $comment) {
            $commentsText .= htmlspecialchars($comment['chatTime']) . ' ' . htmlspecialchars($comment['chatName']) . ': ' . htmlspecialchars($comment['comment']) . "\n";
        }
    } else {
        echo 'No comments found.';
    }
} 



?>

