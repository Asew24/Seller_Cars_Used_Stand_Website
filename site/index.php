<?php
include_once 'header.php';
?>

<section class="food-menu">
    <div class="container">
    <div class="text-center"><?php
            if (isset($_SESSION["userid"])) {
                echo "<p>Hello there </p> " . $_SESSION["userid"] . "</p>";
            }
            ?>
    </div>
        <h2 class="text-center">Introduction</h2>

        <a>
            <h3 class=" text-red text-left">Novos</h3>
        </a>

        <a>
            <h3 class=" text-red text-center">Semi-usados</h3>
        </a>

        <a>
            <h3 class=" text-red text-right">Usados</h3>
        </a>

        <div class="clearfix"></div>
    </div>
</section>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.4723797673573!2d-8.283002784275428!3d41.27682261080432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24935fc0df53df%3A0xff46a7c9805f1ef2!2sCentro%20Comercial%20Do%20Pelourinho!5e0!3m2!1sen!2spt!4v1639076859120!5m2!1sen!2spt" width="99.8%" height="450" style="border: 2;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>