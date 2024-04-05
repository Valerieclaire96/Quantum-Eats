<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/boxes.svg" alt="Quantum Eats logo"/>
    <title>Quantum Eats</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
    <!-- Navbar Section Start -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img class="navbar-logo" src="images/boxes.svg" alt="Quantum Eats logo" />
                <a class="navbar-title" href="#">Quantum Eats</a>
            </div>
            <div class="nav-menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>" class="linktext">Home</a>
                    </li>
                    <li>
                        <a href="#" class="linktext">Categories</a>
                    </li>
                    <li>
                        <a href="#" class="linktext">Foods</a>
                    </li>
                    <li>
                        <a href="#" class="linktext">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Navbar End -->