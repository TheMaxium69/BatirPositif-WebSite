
    <?php

    require "../db/app.php";


    $AllContact = getAllContact();

    foreach ($AllContact as $contact){


        $OneContact = getClassContact($contact);

        echo "<br> - " . $OneContact->email;

    }




    ?>
