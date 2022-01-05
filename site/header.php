<?php
session_start();
?>
<style>
    .asew {
        size: 30%;
        right: auto;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="../site" title="Logo">
                    <img src="../images/logo.png" alt="Site Logo" class="img-responsive ">We don't sell cars, we sell machines!
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li><a href="index.php" class="example_a ">Home</a></li>
                    <li><a href="contact.html" class="example_a">Contact</a></li>
                    <?php
                    if (isset($_SESSION["userid"])) {
                        echo '<li><a href="profile.php" class="example_a">'.$_SESSION["userid"].'</a></li>';
                        echo '<li><a href="../includes/logout.inc.php" class="example_a">Logout</a></li>';
                        echo '<a href="photo_up.php"> Add photo </a><br>';
                    } else {
                        echo '<li><a href="signup.php" class="example_a">Signup</a></li>';
                        echo '<li><a href="login.php" class="example_a">Login</a></li>';
                    }
                    ?>
                    <li><img src="images/profiledefault.png" class="img-curve asew">
            </div>

            <div class="clearfix"></div>
        </div>
    </section>