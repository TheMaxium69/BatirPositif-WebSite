<?php

    session_start();
    require "../db/app.php";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    $AllMail = getAllNewsletter();

    foreach ($AllMail as $Newsletter){

        echo $email = substr($Newsletter['mail'], 1, -1);
        echo "<br>";


    }
?>


