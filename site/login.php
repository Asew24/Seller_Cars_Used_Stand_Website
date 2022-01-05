<?php
include_once 'header.php';
?>

<section class="food-menu text-center">
    <div class="container">
        <h3>Log in</h3>
        <form action="../includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="User name/ Email..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <Button type="submit" name="submit">Log in</Button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo " <p>Fill all fields! </p> ";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information! </p>";
            }
        }
        ?>
</section>

<?php
include_once 'footer.php';
?>