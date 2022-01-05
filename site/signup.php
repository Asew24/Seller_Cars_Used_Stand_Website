<?php
include_once 'header.php';

?>

<section class="food-menu text-center">
    <div class="container">
        <h3>Sing Up</h3>
        <form action="../includes/signup.inc.php" method="post">
            
            <input type="text" name="name" placeholder="Name..."><br>
            <input type="text" name="email" placeholder="Email..."><br>
            <input type="text" name="uid" placeholder="User name..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat passord..."><br>
            <Button type="submit" name="submit">Sign Up</Button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"]))
        if ($_GET["error"] == "emptyinput") {
            echo " <p>Fill all fields! </p> ";
        } else if ($_GET["error"] == "invaliduname") {
            echo "<p>Choose aproper username! </p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords doesn´t match! </p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try agr! </p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken! </p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up! </p>";
        }
    ?>
</section>



<?php
include_once 'footer.php';
?>