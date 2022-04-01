<?php 
    include('variables.php'); 
    include('functions.php'); 
    $db = dbconnect();

    // retenir l'email de la personne connectée pendant 1 an
    setcookie(
        'LOGGED_USER',
        'utilisateur@exemple.com',
        [
            'expires' => time() + 365*24*3600,
            'secure' => true,
            'httponly' => true,
        ]
    );
    $menclothes = findMenClothes($db);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexashop, Online Shopping</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <script src="js/navbar.js"></script>
</head>

<body id="body">
    <header>
        <?php include('header.php'); ?>
    </header>
    <section class="first-section">
        <div class="col-6">
            <div class="left-banner">
                <div class="left-ban-content">
                    <h2>We Are Hexashop</h2>
                    <p>
                        Awesome, clean & creative HTML5 Template
                    </p>
                    <div class="btn-purchase"><a href=""></a>Purchase Now!</a></div>                  
                </div>
            </div>
        </div>
        <div class="col-3 col-left">
            <div class="baner-right-01">
                <div class="inner-banner">
                    <h3>Women</h3>
                    <p>
                        Best Clothes For Women
                    </p>
                    <div class="hover-container">
                        <div class="hover-image">
                            <h3>Women</h3>
                            <p>
                                Lorem ipsum dolor sit amet, conservisii ctetur adispscing elit incid
                            </p>
                            <div class="btn-discover-more"><a href=""></a>Discover More</a></div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="baner-right-02">
                 <div class="inner-banner">
                    <h3>Kids</h3>  
                    <p>
                        Best Clothes For Kids
                    </p> 
                    <div class="hover-container">
                        <div class="hover-image">
                            <h3>Kids</h3>
                            <p>
                                Lorem ipsum dolor sit amet, conservisii ctetur adispscing elit incid
                            </p>
                            <div class="btn-discover-more"><a href=""></a>Discover More</a></div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <div class="col-3 col-right">
            <div class="baner-right-03">
                <div class="inner-banner">
                    <h3>Men</h3>
                    <p>
                        Best Clothes For Men
                    </p>
                    <div class="hover-container">
                        <div class="hover-image">
                            <h3>Men</h3>
                            <p>
                                Lorem ipsum dolor sit amet, conservisii ctetur adispscing elit incid
                            </p>
                            <div class="btn-discover-more"><a href=""></a>Discover More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="baner-right-04">
                <div class="inner-banner">
                    <h3>Accessories</h3>
                    <p>
                        Best Trend Accessories
                    </p>
                    <div class="hover-container">
                        <div class="hover-image">
                            <h3>Accessories</h3>
                            <p>
                                Lorem ipsum dolor sit amet, conservisii ctetur adispscing elit incid
                            </p>
                            <div class="btn-discover-more"><a href=""></a>Discover More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="col-7">
            <div class="first-carousel-title">
                <h3 id="men-latest">Men's Latest</h3>
                <p>Details to details is what makes Hexashop different from the other themes</p>
            </div>
            <div id="first-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="first-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[0]['title'] ?></p>
                                            <p>$<?php echo $menclothes[0]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="first-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[1]['title'] ?></p>
                                            <p>$<?php echo $menclothes[1]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="first-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[2]['title'] ?></p>
                                            <p>$<?php echo $menclothes[2]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="first-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[3]['title'] ?></p>
                                            <p>$<?php echo $menclothes[3]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="first-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[4]['title'] ?></p>
                                            <p>$<?php echo $menclothes[4]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="first-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p><?php echo $menclothes[5]['title'] ?></p>
                                            <p>$<?php echo $menclothes[5]['price'] ?></p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#first-carousel" role="button" data-bs-slide="prev">
                    <div>
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </a>
                <a class="carousel-control-next" href="#first-carousel" role="button" data-bs-slide="next">
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="col-7">
            <div class="second-carousel-title">
                <h3 id="women-latest">Women's Latest</h3>
                <p>Details to details is what makes Hexashop different from the other themes</p>
            </div>
            <div id="second-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="second-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>New Green Jacket</p>
                                            <p>$75.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="second-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Classic Dress</p>
                                            <p>$45.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="second-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Spring Collection</p>
                                            <p>$130.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="second-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Classing Spring</p>
                                            <p>$120.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="second-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Air Force 1 X</p>
                                            <p>$90.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="second-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Love Nana '20</p>
                                            <p>$150.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#second-carousel" role="button" data-bs-slide="prev">
                    <div>
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </a>
                <a class="carousel-control-next" href="#second-carousel" role="button" data-bs-slide="next">
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>    
    <section class="fourth-section">
        <div class="col-7">
            <div class="third-carousel-title">
                <h3 id="kids-latest">Kid's Latest</h3>
                <p>Details to details is what makes Hexashop different from the other themes</p>
            </div>
            <div id="third-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="third-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>New Green Jacket</p>
                                            <p>$75.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="third-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Classic Dress</p>
                                            <p>$45.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="third-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Spring Collection</p>
                                            <p>$130.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="col-4">
                                <div class="third-carousel-image1">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Classing Spring</p>
                                            <p>$120.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="third-carousel-image2">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Air Force 1 X</p>
                                            <p>$90.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="third-carousel-image3">
                                    <div class="carousel-hover">
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-eye"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-star"></i>
                                            </div></a>
                                        </div>
                                        <div class="carousel-link">
                                            <a href=""><div>
                                                <i class="fa fa-shopping-cart"></i>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="carousel-text">
                                        <div>
                                            <p>Love Nana '20</p>
                                            <p>$150.00</p>
                                        </div>
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#third-carousel" role="button" data-bs-slide="prev">
                    <div>
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </a>
                <a class="carousel-control-next" href="#third-carousel" role="button" data-bs-slide="next">
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="fifth-section">
        <div class="col-7">
            <div class="fifth-section-content">
                <div>
                    <div class="left-side">
                        <div class="left-ban-content">
                            <h2>Explore Our Products</h2>
                            <p>
                                You are allowed to use this HexaShop HTML CSS template. You can feel<br> 
                                free to modify or edit this layout. You can convert this template as any<br>
                                kind of ecommerce CMS theme as you wish.
                            </p>
                            <p>
                                You are not allowed to redistribute this template ZIP file on any<br>
                                other website.
                            </p>
                            <p>
                                There are 5 pages included in this HexaShop Template and we are<br>
                                providing it to you for absolutely free of charge at our TemplateMo<br>
                                website. There are web development costs for us. 
                            </p>
                            <p>
                                If this template is beneficial for your website or business, please kindly<br>
                                support us a little via PayPal. Please also tell your friends about our<br>
                                great website. Thank you.
                            </p>
                            <div class="btn-discover-more2"><a href=""></a>Discover More</a></div>                  
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid1">
                        <div class="baner-right-01">
                            <div class="inner-banner">
                                <h3>Leather Bags</h3>
                                <p>
                                    Latest Collection
                                </p>
                            </div>
                        </div>
    
                        <div class="baner-right-02">            
                        </div>
    
                        <div class="baner-right-03">
                        </div>
    
                        <div class="baner-right-04">
                            <div class="inner-banner">
                                <h3>Different Types</h3>
                                <p>
                                    Over 304 Products
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sixth-section">
        <div class="col-7">
            <div class="aaa">
                <div class="sixth-section-text">
                    <h2>Social Media</h2>
                    <p>Details to details is what makes Hexashop different from the other themes.</p>
                </div>
                <div>
                    <div class="list-image1"></div>
                    <div class="list-image2"></div>
                    <div class="list-image3"></div>
                    <div class="list-image4"></div>
                    <div class="list-image5"></div>
                    <div class="list-image6"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="seventh-section">
        <div class="col-7">
            <div class="section-content">
                <div class="col-9">
                    <div class="section-text">
                        <h2>By Subscribing To Our Newsletter You<br>
                            Can Get 30% Off</h2>
                        <p>
                            Details to details is what makes Hexashop different from the other themes.
                        </p>
                    </div>
                    <div class="section-form">
                        <form method="post" action="reductionDemand.php">
                            <p>
                                <input type="text" placeholder="Your Name" name="name" id="name" size="30"/>
                            </p>
                            <p>
                                <input type="email" placeholder="Your Email Adress" name="email" id="email" size="25"/>
                            </p>
                            <button type="submit" class="btn-send">
                                    <i class="fa fa-paper-plane"></i>
                            </button>

                        </form>
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-contact">
                        <div class="grid">
                            <div>
                                <h3>Store Location:</h3>
                                <p>Sunny Isles Beach, FL<br> 33160, United States</p>
                            </div>
                            <div>
                                <h3>Work Hours:</h3>
                                <p>07:30 AM - 9:30 PM<br> Daily</p>
                            </div>
                            <div>
                                <h3>Phone:</h3>
                                <p>010-020-0340</p>
                            </div>
                            <div>
                                <h3>Email:</h3>
                                <p>info@company.com</p>
                            </div>
                            <div>
                                <h3>Office Location:</h3>
                                <p>North Miami Beach</p>
                            </div>
                            <div>
                                <h3>Social Media:</h3>
                                <p>Facebook, Instagram,<br>
                                    Behance, Linkedin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
            <?php include('footer.php'); ?>
    </footer>
</body>

</html>