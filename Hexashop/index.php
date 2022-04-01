<?php 
    include('variables.php'); 
    include('functions.php'); 
    $db = dbconnect();

    $clothesmen = sortMenClothes($db);
    $clotheswomen = sortWomenClothes($db);

    require('controller.php');
?>

<?php     
if ($_GET['action'] == 'addReview') {
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
} 
?>

<?php require('indexView.php'); ?>