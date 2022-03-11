<?php

/************
 *
 * Newsletters
 *
 ************/

if (!empty($_GET['mail'])){

    $mail = $_GET['mail'];

    $mailProtect = protectMail($mail);

    insertMail($mailProtect);

} else {

    erreurMail("T901");

}

function protectMail ($mail){

    $mail = "*" . $mail . "*";

    return $mail;

}

function insertMail($mail){



    include "db.php";

    $q = $db->prepare("INSERT INTO `newsletter` (`mail`) VALUES (:mail)");

    $q->execute([
        'mail' => $mail
    ]);

    valideMail("T101");



}

function erreurMail($errCode){

    $url = "../blog.php?err=" . $errCode . "#news";

    header('Location: '. $url );

}

function valideMail($trueCode){

        $url = "../blog.php?true=" . $trueCode . "#news";

        header('Location: '. $url );

}