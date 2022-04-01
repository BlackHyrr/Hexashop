<?php 

function addReview($id, $author, $comment)
{
    $affectedLines = postReview($id, $author, $comment);

    if ($affectedLines === false) {
        die('Unable to add your review!');
    }
    else {
        header('Location: index.php?action=post&id=' . $id);
    }
}