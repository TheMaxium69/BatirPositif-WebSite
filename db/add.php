<?php

require "../app/env.php";
require "../recaptcha-php-lib-1.2.4/autoload.php";

if (!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['email']) && !empty($_GET['content']) && !empty($_GET['g-recaptcha-response'])){

    $recaptcha = new \ReCaptcha\ReCaptcha($env_captcha_servid);
    $resp = $recaptcha->verify($_GET['g-recaptcha-response']);
    if ($resp->isSuccess()) {

        require "contact.php";

        $sendObject = null;
        $sendObject = new contact();

        $sendObjectExtract = extracted($sendObject);

        $sendObjectProtect = protect($sendObjectExtract);
        insert($sendObjectProtect);

    } else {
        $errors = $resp->getErrorCodes();
        erreur("T606");
    }

} else {
    erreur("T901");
}

function extracted(contact $sendObject)
{
    $sendObject->type = $_GET['type'];
    $sendObject->firstName = $_GET['firstName'];
    $sendObject->lastName = $_GET['lastName'];
    $sendObject->email = $_GET['email'];
    $sendObject->phone = $_GET['phone'];
    $sendObject->content = $_GET['content'];

    return $sendObject;
}

function protect (contact $sendObject){

    if ($sendObject->type != null){
        $sendObject->type = "*" . $sendObject->type . "*";
    }

    $sendObject->firstName = "*" . $sendObject->firstName . "*";
    $sendObject->lastName = "*" . $sendObject->lastName . "*";
    $sendObject->email = "*" . $sendObject->email . "*";

    if ($sendObject->phone != null){
        $sendObject->phone = "*" . $sendObject->phone . "*";
    }

    $sendObject->content = "*" . $sendObject->content . "*";

    return $sendObject;

}

function insert(contact $requestFinal){

    $type = $requestFinal->type;
    $firstName = $requestFinal->firstName;
    $lastName = $requestFinal->lastName;
    $email = $requestFinal->email;
    $phone = $requestFinal->phone;
    $content = $requestFinal->content;


    include "db.php";

    $q = $db->prepare("INSERT INTO `contact` (`type`, `firstName`, `lastName`, `email`, `phone`, `content`) VALUES (:type, :firstName, :lastName, :email, :phone, :content)");

    $q->execute([
        'type' => $type,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'phone' => $phone,
        'content' => $content
    ]);

    if (!empty($type)){

        if ($type == "*1*"){

            valide("T111");

        } else if ($type == "*2*"){


            valide("T121");

        } else if ($type == "*3*"){


            valide("T131");

        }

    } else {
        valide("T101");
    }


}

function erreur($errCode){

    $url = "../form.php?err=" . $errCode;

    header('Location: '. $url );

}

function valide($trueCode){

    if ($trueCode == "T111"){

        $url = "../form.php?name=1&true=" . $trueCode;

        header('Location: '. $url );


    } else if ($trueCode == "T121"){

        $url = "../form.php?name=2&true=" . $trueCode;

        header('Location: '. $url );

    } else if($trueCode == "T131"){

        $url = "../form.php?name=3&true=" . $trueCode;

        header('Location: '. $url );

    } else {

        $url = "../form.php?true=" . $trueCode;

        header('Location: '. $url );

    }
}
