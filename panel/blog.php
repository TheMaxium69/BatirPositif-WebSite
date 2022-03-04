<?php include "app.php"; ?>

<main>

    <?php
    echo "Page -> Blog";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    ?>



</main>

</body> </html>