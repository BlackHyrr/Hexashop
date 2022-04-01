<?php

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

function getRecipe($recipe, $users) : void {
    foreach ($users as $user) {
        if ($recipe["author"] == $user["email"]) {
            echo $user["full_name"];
        }
    }
}

function isFormValid($email, $pass, $users) {
    if (!empty($_POST['email']) && (!empty($_POST['pass'])))
        for ($i = 0; $i <= 2; $i++){
            $user = $users[$i];
            if ($user['email'] == $_POST['email']) {
                if ($_POST['pass'] == $user['password']) {
                    echo 'Hello ' . $user['full_name'] . '!';
                    break;   
                }
                else {
                    echo 'wrong password';
                    break;
                }
            }
            else {
                continue;
            }
        }
    else {
        echo 'Il faut un email et un mot de passe pour soumettre le formulaire.';
    }
}       
 
            /*{
                    if ($_POST['pass'] == $user['password']) {
                        echo 'ok';   
                    }
                    else {
                        echo 'wrong password';
                    }
                }
            else 
                {
                    header("Location: recipe.php");
                    exit;
                }*/


//function isLoginValid()


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

function findMenClothes($db) {
    $menclothesStatement = $db->prepare('SELECT * FROM menclothes');
    $menclothesStatement->execute();
    $menclothes = $menclothesStatement->fetchAll();
    return $menclothes;
}

function findWomenClothes($db) {
    $womenclothesStatement = $db->prepare('SELECT * FROM womenclothes');
    $womenclothesStatement->execute();
    $womenclothes = $womenclothesStatement->fetchAll();
    return $womenclothes;
}

function sortMenClothes($db) {
    $menclothes = findMenClothes($db);
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

    $womenclothes = findWomenClothes($db);
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
/*function findMenClothesImage($db) {
    $menclothesStatement = $db->prepare('SELECT * FROM menclothes');
    $menclothesStatement->execute();
    $menclothes = $menclothesStatement->fetchAll();
    foreach ($menclothes as $menclothe) {
        return $menclothe['image'];
    }
}*/


