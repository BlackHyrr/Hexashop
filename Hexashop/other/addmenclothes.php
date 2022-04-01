<?php 

if (!empty($_POST['form1-submit'])) {

    include('variables.php'); 
    include('functions.php'); 
    $db = dbconnect();
    $clothname = $_POST['title'];
    $clothdescription = $_POST['description'];
    $clothprice = $_POST['price'];
    $clothimage = $_POST['imagepath'];

$sqlQuery = 'INSERT INTO `menclothes`(`title`, `description`, `price`, `imagepath`) VALUES (:title, :description, :price, :imagepath)';


$addclothes = $db->prepare($sqlQuery);
$addclothes->execute([
    'title' => $clothname,
    'description' => $clothdescription,
    'price' => $clothprice,
    'imagepath' => $clothimage
]);

}

if (!empty($_POST['form2-submit'])) {

    include('variables.php'); 
    include('functions.php'); 
    $db = dbconnect();
    $clothname = $_POST['title'];
    $clothdescription = $_POST['description'];
    $clothprice = $_POST['price'];
    $clothimage = $_POST['imagepath'];

$sqlQuery = 'INSERT INTO `menclothes`(`title`, `description`, `price`, `imagepath`) VALUES (:title, :description, :price, :imagepath)';


$addclothes = $db->prepare($sqlQuery);
$addclothes->execute([
    'title' => $clothname,
    'description' => $clothdescription,
    'price' => $clothprice,
    'imagepath' => $clothimage
]);

}

if (!empty($_POST['form3-submit'])) {

    include('variables.php'); 
    include('functions.php'); 
    $db = dbconnect();
    $clothname = $_POST['title'];
    $clothdescription = $_POST['description'];
    $clothprice = $_POST['price'];
    $clothimage = $_POST['imagepath'];

$sqlQuery = 'INSERT INTO `menclothes`(`title`, `description`, `price`, `imagepath`) VALUES (:title, :description, :price, :imagepath)';


$addclothes = $db->prepare($sqlQuery);
$addclothes->execute([
    'title' => $clothname,
    'description' => $clothdescription,
    'price' => $clothprice,
    'imagepath' => $clothimage
]);

}
?>