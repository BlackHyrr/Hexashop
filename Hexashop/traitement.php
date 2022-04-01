<?php 
    include('variables.php');
    include('functions.php');


if (!empty($_POST['login-form'])) {

    isFormValid($email, $pass, $users);
}

if (!empty($_POST['form1-submit'])) {

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
    //header( "refresh:4;url=editdb.php" );
    require('dbupdated.php');
}

if (!empty($_POST['form2-submit'])) {

    $db = dbconnect();
    $clothname = $_POST['title'];
    $clothdescription = $_POST['description'];
    $clothprice = $_POST['price'];
    $clothimage = $_POST['imagepath'];

    $sqlQuery = 'INSERT INTO `womenclothes`(`title`, `description`, `price`, `imagepath`) VALUES (:title, :description, :price, :imagepath)';


    $addclothes = $db->prepare($sqlQuery);
    $addclothes->execute([
        'title' => $clothname,
        'description' => $clothdescription,
        'price' => $clothprice,
        'imagepath' => $clothimage
        
    ]);
    header( "refresh:4;url=editdb.php" );
    require('dbupdated.php');
}

if (!empty($_POST['form3-submit'])) {

    $db = dbconnect();
    $clothname = $_POST['title'];
    $clothdescription = $_POST['description'];
    $clothprice = $_POST['price'];
    $clothimage = $_POST['imagepath'];

    $sqlQuery = 'INSERT INTO `kidsclothes`(`title`, `description`, `price`, `imagepath`) VALUES (:title, :description, :price, :imagepath)';


    $addclothes = $db->prepare($sqlQuery);
    $addclothes->execute([
        'title' => $clothname,
        'description' => $clothdescription,
        'price' => $clothprice,
        'imagepath' => $clothimage
    ]);
    header( "refresh:4;url=editdb.php" );
    require('dbupdated.php');
}

?>

