<?php
require_once('model/DbconnectManager.php');

class MainManager extends DbconnectManager
{
    function displayMain() {
        $db = $this->dbConnect();

        return $db;
    }

}