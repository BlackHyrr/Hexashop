<?php ob_start() ?>

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
