<?php


function dbconnect() {
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=test;charset=utf8',
            'root',
            ''
        );
        return $db;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    return false;
}

function postReview($id, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO review(id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($id, $author, $comment));
    $comment = $comments->fetch();
    return $comment;
}

?>