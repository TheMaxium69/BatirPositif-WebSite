<?php

function getAllContact(){

    require_once "db.php";

    $request = "SELECT * FROM contact";

    $allContact = mysqli_query($ConnectDB, $request);

    return $allContact;



}

function getClassContact($contact){

    require_once "contact.php";

    $contactClass = new contact();

    $contactClass->id = $contact['id'];
    $contactClass->type = $contact['type'];
    $contactClass->firstName = $contact['firstName'];
    $contactClass->lastName = $contact['lastName'];
    $contactClass->email = $contact['email'];
    $contactClass->phone = $contact['phone'];
    $contactClass->content = $contact['content'];
    $contactClass->createdAt = $contact['createdAt'];

    return $contactClass;

}

function getAllNewsletter(){

    require_once "db.php";

    $requestNews = "SELECT * FROM newsletter";

    $allNewsletter = mysqli_query($ConnectDB, $requestNews);

    return $allNewsletter;

}
