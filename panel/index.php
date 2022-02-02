<?php include "app.php"; ?>

<main>


    <?php

    if (empty($_POST['username']) && empty($_POST['password'])){

        form();

    } else {

        $TapeUsername = $_POST['username'];
        $TapePassword = $_POST['password'];

        if ($formuser != $TapeUsername && $formpass != $TapePassword){

            form("err");

        } else {

            include "composant/contact.phtml"; ?>

            <br>

            <?php include "composant/newsletter.phtml";

        }
    }


    ?>











</main>

</body> </html>
