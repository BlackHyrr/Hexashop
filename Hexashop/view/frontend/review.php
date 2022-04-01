<?php $title = 'Your Reviews'; ?>

<?php ob_start(); ?>

<h1>Your Reviews</h1>

<?php
while ($data = $reviews->fetch())
{
?>
    <div class="reviews">
        <h3>
            <?= htmlspecialchars($data['author']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['comment'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php } ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>