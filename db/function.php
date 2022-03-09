<?php

function getAllContact(){


    require "db.php";

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

function delContact($idContact){

    require "db.php";

    $requestIsValide = "SELECT * FROM contact WHERE id = '$idContact'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM contact WHERE id ='$idContact'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}

function getAllNewsletter(){

    require "db.php";

    $requestNews = "SELECT * FROM newsletter";

    $allNewsletter = mysqli_query($ConnectDB, $requestNews);

    return $allNewsletter;

}

function delNewsletter($idNews){

    require "db.php";

    $requestIsValide = "SELECT * FROM newsletter WHERE id = '$idNews'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM newsletter WHERE id ='$idNews'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}

function getAllBlog(){

    require "db.php";

    $requestNews = "SELECT * FROM blog";

    $allBlog = mysqli_query($ConnectDB, $requestNews);

    return $allBlog;

}

function getAllUser(){

    require "db.php";

    $requestNews = "SELECT * FROM users";

    $allUser = mysqli_query($ConnectDB, $requestNews);

    return $allUser;

}

function getUser($email){

    require "db.php";

    $requestNews = "SELECT * FROM users WHERE email = '$email'";

    $resultUser = mysqli_query($ConnectDB, $requestNews);

    if($resultUser->num_rows == 1){

        return $resultUser;

    } else {
        return null;
    }


}

function delUser($idUser){

    require "db.php";

    $requestIsValide = "SELECT * FROM users WHERE id = '$idUser'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM users WHERE id ='$idUser'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}

function createUser($alias, $email, $password){

    require "db.php";

    $requestIsValide = "SELECT * FROM users WHERE email = '$email'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 0){

        $requestCreate = "INSERT INTO users(alias, email, password) VALUES ('$alias', '$email', '$password')";

        mysqli_query($ConnectDB, $requestCreate);

    }

}

function getAllEnv(){

    require "db.php";

    $requestNews = "SELECT * FROM env";

    $allEnv = mysqli_query($ConnectDB, $requestNews);

    return $allEnv;

}