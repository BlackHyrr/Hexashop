<?php 

require_once('model/DbconnectManager.php');
require_once('model/ReviewManager.php');
require_once('model/ClothesManager.php');
require_once('model/MainManager.php');

function addReview($id, $author, $comment)
{
    $reviewManager = new ReviewManager();
    $affectedLines = $reviewManager->postReview($id, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Unable to add your review!');
    }
    else {
        header('Location: index.php?action=post&id=' . $id);
    }
}

function listReviews()
{
    $reviewManager = new ReviewManager();
    $reviews = $reviewManager->getReviews();
    return $reviews;
    require('view/frontend/review.php');
}



function sortMenClothes($db) {
    $clothesManager = new clothesManager();
    $menclothes = $clothesManager->findMenClothes($db);
    $nbMenclothes = count($menclothes);
    $clothesmen = [];
    $tempclothmen = [];
    foreach ($menclothes as $mencloth) {
        $tempclothmen[] =  $mencloth;
        if(count($tempclothmen) === 3) {
            $clothesmen[] = $tempclothmen;
            $tempclothmen = [];
        }
    }
    if(count($tempclothmen) > 0) {
        $clothesmen[] = $tempclothmen;
    }
    $nbClothesmen = count($clothesmen);
    return $clothesmen;
}

function sortWomenClothes($db) {
    $clothesManager = new clothesManager();
    $womenclothes = $clothesManager->findWomenClothes($db);
    $nbWomenclothes = count($womenclothes);
    $clotheswomen = [];
    $tempclothwomen = [];
    foreach ($womenclothes as $womencloth) {
        $tempclothwomen[] =  $womencloth;
        if(count($tempclothwomen) === 3) {
            $clotheswomen[] = $tempclothwomen;
            $tempclothwomen = [];
        }
    }
    if(count($tempclothwomen) > 0) {
        $clotheswomen[] = $tempclothwomen;
    }
    $nbClotheswomen = count($clotheswomen);
    return $clotheswomen;

}


function displayView() {
    $mainManager = new mainManager();
    $db = $mainManager->displayMain();
    $clothesmen = sortMenClothes($db);
    $clotheswomen = sortWomenClothes($db);
    include('indexView.php');
}