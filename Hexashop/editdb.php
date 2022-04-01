
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexashop, login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <script src="js/navbar.js"></script>
</head>
<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <section class="login-section">
        <div class="div-form">
            <h2>Add new clothes for Men</h2>
            <form method="post" action="traitement.php">
                <p>
                    <input type="text" placeholder="Cloth name" name="title" id="title" size="25"/>
                </p>
                <p>
                    <input type="description" placeholder="Cloth description" name="description" id="description" size="25"/>
                </p>
                <p>
                    <input type="number" placeholder="Price" name="price" id="price" size="25"/>
                </p>
                <p>
                    <input type="text" placeholder="Image path" name="imagepath" id="imagepath" size="25"/>
                </p>
                <input type="submit" name="form1-submit" value="Add entry">
            </form>
        </div>
        <div class="div-form">
            <h2>Add new clothes for Women</h2>
            <form method="post" action="traitement.php">
                <p>
                    <input type="text" placeholder="Cloth name" name="title" id="title" size="25"/>
                </p>
                <p>
                    <input type="description" placeholder="Cloth description" name="description" id="description" size="25"/>
                </p>
                <p>
                    <input type="number" placeholder="Price" name="price" id="price" size="25"/>
                </p>
                <p>
                    <input type="text" placeholder="Image path" name="imagepath" id="imagepath" size="25"/>
                </p>
                <input type="submit" name="form2-submit" value="Add entry">
            </form>
        </div>
        <div class="div-form">
            <h2>Add new clothes for Kids</h2>
            <form method="post" action="traitement.php">
                <p>
                    <input type="text" placeholder="Cloth name" name="title" id="title" size="25"/>
                </p>
                <p>
                    <input type="description" placeholder="Cloth description" name="description" id="description" size="25"/>
                </p>
                <p>
                    <input type="number" placeholder="Price" name="price" id="price" size="25"/>
                </p>
                <p>
                    <input type="text" placeholder="Image path" name="imagepath" id="imagepath" size="25"/>
                </p>
                <input type="submit" name="form3-submit" value="Add entry">
            </form>
        </div>
    </section>
    <footer>
            <?php include('footer.php'); ?>
    </footer>
</body>
</html>