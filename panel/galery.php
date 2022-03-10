<?php include "app.php"; navbar(5); ?>

<main>


    <?php
    echo "Page -> Galery";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    ?>

    <br>

    <p style="text-align: center">EN COURS</p>

    <br>


</main>


</body> </html>