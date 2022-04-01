
<?php $title = 'Hexashop, Online Shopping' ?>

<?php 

while ($data = $affectedLines->fetch())
ob_start() ?>

<nav id="navbar">
    <div class="col-7">
        <div class="logo">
            <a href="index.php"><img src="img\logo.png" alt="Logo de l'entreprise"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Men's</a></li>
                <li><a href="">Women's</a></li>
                <li><a href="">Kid's</a></li>
                <li><a href="">Pages</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Explore</a></li>
            </ul>
        </div>
    </div>
    <div class="hello">
    </div>
</nav>

<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>

<body id="body">
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
                <?php foreach ($clothesmen as $key => $cloth) { ?>
                    <div class="carousel-item <?php if ($key == 0) {?>active<?php } ?>">
                        <div class="d-flex">
                        <?php foreach ($cloth as $item) { ?>
                            <div class="col-4">
                                <div class="first-carousel-image" >
                                    <img src="<?= $item['imagepath'];?>" alt="">
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
                                            <p><?= $item['title'] ?></p>
                                            <p>$<?= $item['price'] ?></p>
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
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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
                    <?php foreach ($clotheswomen as $key => $cloth) { ?>
                    <div class="carousel-item <?php if ($key == 0) {?>active<?php } ?>">
                        <div class="d-flex">
                            <?php foreach ($cloth as $item) { ?>
                            <div class="col-4">
                                <div class="second-carousel-image">
                                    <img src="<?= $item['imagepath'];?>" alt="">
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
                                            <p><?= $item['title'] ?></p>
                                            <p>$<?= $item['price'] ?></p>
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
                            <?php } ?>            
                        </div>       
                    </div>    
                    <?php } ?>
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
</body>

<?php $content = ob_get_clean(); ?>



<?php ob_start(); ?>

<div class="col-7">
    <div>
        <div class="footer-content">
            <div class="logo">
                <div img src="img\logo.png" alt="Logo de l'entreprise"></div>
            </div>
            <a href=""><span>16501 Collins Ave, Sunny Isles Beach,<br> FL 33160, United States</span></a>
            <a href=""><span>hexashop@company.com</span></a>
            <a href=""><span>010-020-0340</span></a>
        </div>
        <div class="footer-content">
            <h4>Shopping & Categories</h4>
            <a href="#men-latest"><span>Men’s Shopping</span></a>
            <a href="#women-latest"><span>Women’s Shopping</span></a>
            <a href="#kids-latest"><span>Kid's Shopping</span></a>
        </div>
        <div class="footer-content">
            <h4>Useful Links</h4>
            <a href="index.php"><span>Homepage</span></a>
            <a href=""><span>Abous Us</span></a>
            <a href="login.php"><span>Login</span></a>
            <a href="review.php"><span>Review</span></a>
        </div>
        <div class="footer-content">
            <h4>Helps & Information</h4>
            <a href="recipe.php"><span>Recipe PHP</span></a>
            <a href=""><span>FAQ's</span></a>
            <a href="editdb.php"><span>Add Clothes</span></a>
            <a href=""><span>Contact Us</span></a>
        </div>
    </div>
    <div class="footer-bottom">
        <div>
            <span>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.</span>
            <span>Design: <a href="">TemplateMo</a></span>
            <ul>
                <li>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-behance"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php $footer = ob_get_clean(); ?>


<?php require('template.php');