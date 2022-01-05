<?php
include_once 'header.php';
?>

<form action="uploads.php" method="post" enctype="multipart/form-data" class="text-center">
    <input type="file" name="file_ft">
    <button type="submit" name="ft_submit">UPLOAD</button>
    <a href="./">Voltar</a>
</form>

<?php
include_once 'footer.php';
?>