/*<?php /*$title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Add a reviews</h1>


<div class="listReviews">
    <form action="index.php?action=addReview&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Author</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Review</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?> */