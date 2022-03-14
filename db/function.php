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

function createBlog($title, $content, $picture){

    require "db.php";

    $title = str_replace("'", "&#039", $title);
    $content = str_replace("'", "&#039", $content);
    $picture = str_replace("'", "&#039", $picture);

    $requestCreateBlog = "INSERT INTO blog(title, picture, content) VALUES ('$title', '$picture', '$content')";

    mysqli_query($ConnectDB, $requestCreateBlog);


}

function delBlog($idBlog){

    require "db.php";

    $requestIsValide = "SELECT * FROM blog WHERE id = '$idBlog'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM blog WHERE id ='$idBlog'";

        mysqli_query($ConnectDB, $requestDelete);

    }

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

function editGeneral($name, $content){

    require "db.php";

    $content = str_replace("'", "&#039", $content);
    $content = str_replace("ô", "&ocirc;", $content);
    $content = str_replace("î", "&icirc;", $content);

    $requestEnv = "UPDATE env SET content='$content' WHERE name='$name'";

    mysqli_query($ConnectDB, $requestEnv);

}

function getAllGalery(){

    require "db.php";

    $requestGalery = "SELECT * FROM galery";

    $allGalery = mysqli_query($ConnectDB, $requestGalery);

    return $allGalery;

}

function createGalery($text, $picture){

    require "db.php";


    $picture = str_replace("'", "&#039", $picture);
    $picture = str_replace(" ", "%20", $picture);

    if ($text == null){

        $requestCreateGalery = "INSERT INTO galery(picture, text) VALUES ('$picture', null)";
    } else {

        $text = str_replace("'", "&#039", $text);
        $requestCreateGalery = "INSERT INTO galery(picture, text) VALUES ('$picture', '$text')";

    }
    mysqli_query($ConnectDB, $requestCreateGalery);

}

function delGalery($idGalery){

    require "db.php";

    $requestIsValide = "SELECT * FROM galery WHERE id = '$idGalery'";

    $isIdValide = mysqli_query($ConnectDB, $requestIsValide);

    if($isIdValide->num_rows == 1){

        $requestDelete = "DELETE FROM galery WHERE id ='$idGalery'";

        mysqli_query($ConnectDB, $requestDelete);

    }

}