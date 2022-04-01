<?php 

require_once('model/DbconnectManager.php');

class ReviewManager extends DbconnectManager
{
    /*public function postReview($id, $author, $comment)
    {
        $db = dbConnect();
        $comments = $db->prepare('INSERT INTO review(id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($id, $author, $comment));
        $comment = $comments->fetch();
        return $comment;
    }*/


    public function getReviews()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM review ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getReview($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM review WHERE id = ?');
        $req->execute(array($postId));
        $comments = $req->fetch();

        return $comments;
    }

    public function postReview($id, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($id, $author, $comment));

        return $affectedLines;
    }

    /*public function getReviews()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getReview($reviewId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($reviewId));
        $review = $req->fetch();

        return $review;
    }*/

}