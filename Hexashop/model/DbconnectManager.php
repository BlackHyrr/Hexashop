<?php
class DbconnectManager

{
    protected function dbconnect() {
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
}