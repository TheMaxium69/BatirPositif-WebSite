<?php include "app.php"; ?>

<main>


    <?php

    if (empty($_POST['username']) && empty($_POST['password'])){

        form();

    } else {

        $TapeUsername = $_POST['username'];
        $TapePassword = $_POST['password'];

        $resultUser = getUser($TapeUsername);

        if ($resultUser != null){
            foreach( $resultUser as $value){
                $userId =  $value['id'];
                $userAlias =  $value['alias'];
                $userEmail = $value['email'];
                $vraiMotDePasse =  $value['password'];
            }


            if ($TapePassword == $vraiMotDePasse){

                include "composant/contact.phtml"; ?>

                <br>

                <?php include "composant/newsletter.phtml";

            } else {
                form("err");
            }


        }

    }


    ?>











</main>

</body> </html>
