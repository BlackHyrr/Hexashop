<?php 

require_once('model/DbconnectManager.php');

class ClothesManager extends DbconnectManager
{
    function findMenClothes($db) {
        $db = $this->dbConnect();
        $menclothesStatement = $db->prepare('SELECT * FROM menclothes');
        $menclothesStatement->execute();
        $menclothes = $menclothesStatement->fetchAll();
        return $menclothes;
    }
    
    function findWomenClothes($db) {
        $db = $this->dbConnect();
        $womenclothesStatement = $db->prepare('SELECT * FROM womenclothes');
        $womenclothesStatement->execute();
        $womenclothes = $womenclothesStatement->fetchAll();
        return $womenclothes;
    }
}