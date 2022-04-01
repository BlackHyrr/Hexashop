<?php 
    require('controller/frontend.php');

?>

<?php  

try {

    /*if ($_GET['action'] == 'addReview') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addReview($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } */
    if (isset($_GET['action']) && $_GET['action'] > 0) {
        if ($_GET['action'] == 'listReview') {
            listReviews();
        }
        else {
            echo 'Erreur';
        }
    }

    else {
        displayView();
    }
}

/*displayView();*/

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>

