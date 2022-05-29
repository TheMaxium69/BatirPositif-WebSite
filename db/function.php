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

function getOneBlog($id){

    require "db.php";

    $requestNews = "SELECT * FROM blog WHERE id = '$id'";

    $Blog = mysqli_query($ConnectDB, $requestNews);

    foreach ($Blog as $BlogInc)

    return $BlogInc;

}

function verifBlogOnline(){

    require "db.php";

    $requestVerif = "SELECT * FROM blog WHERE status = 1";

    $verif = mysqli_query($ConnectDB, $requestVerif);

    return $verif;

}

function draftsBlog($id, $mode){

    require "db.php";

    if ($mode == 1){

        $requestDrafts = "UPDATE blog SET status = '1' WHERE id = '$id'";

    } else if ($mode == 2){

        $requestDrafts = "UPDATE blog SET status = '0' WHERE id = '$id'";

    }

    mysqli_query($ConnectDB, $requestDrafts);


}

function createBlog($title, $content, $picture, $pictureBack, $arrayIMG){

    require "db.php";

    $title = str_replace("'", "&#039", $title);
    $content = str_replace("'", "&#039", $content);
    $picture = str_replace("'", "&#039", $picture);
    $pictureBack = str_replace("'", "&#039", $pictureBack);



    $content = str_replace("<j>", "</p><j>", $content);
    $content = str_replace("</j>", "</j><p>", $content);


    $content = str_replace("<l>", "</p><l>", $content);
    $content = str_replace("</l>", "</l><p>", $content);


    $arrayIMG = json_encode($arrayIMG, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    $requestCreateBlog = "INSERT INTO blog(title, picture, pictureBack, content, json) VALUES ('$title', '$picture', '$pictureBack', '$content', '$arrayIMG')";

    mysqli_query($ConnectDB, $requestCreateBlog);


}

function updateBlog($id, $title, $content, $picture, $pictureBack, $arrayIMG){

    require "db.php";

    $title = str_replace("'", "&#039", $title);
    $content = str_replace("'", "&#039", $content);
    $picture = str_replace("'", "&#039", $picture);
    $pictureBack = str_replace("'", "&#039", $pictureBack);


    $content = str_replace("<j>", "</p><j>", $content);
    $content = str_replace("</j>", "</j><p>", $content);

    $content = str_replace("<l>", "</p><l>", $content);
    $content = str_replace("</l>", "</l><p>", $content);

    $arrayIMG = json_encode($arrayIMG, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    $requestUpdateBlog = "UPDATE blog SET title='$title', picture='$picture', pictureBack='$pictureBack', content='$content', json='$arrayIMG' WHERE id = '$id';";

    mysqli_query($ConnectDB, $requestUpdateBlog);
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

function uncodeContentBlog($content, $json){

    /*
     *
     * @size = 35
     * <br><img src="assets/upload/galery/
     *
     * @size = 28
     * <br><img src="assets/upload/
     *
     * @size = 34
     * " class="articleImageInterne"><br>
     *
     * */




    $next = "tyrolium1234";
    $arrayMSG = array();
    for ($i = 0; $i <= count($json)-1; $i++) {

    //    var_dump($next);

        if ($next == "tyrolium1234"){
            $pos = strpos($content, $json[$i]);
        } else {
            $pos = strpos($next, $json[$i]);
        }

        if ($pos != false) {

            $temp1 = $pos-28;

            /*TEXT AVANT IMAGE*/
            if ($next == "tyrolium1234"){
                array_push($arrayMSG, substr($content, 0, $temp1));
            } else{
                array_push($arrayMSG, substr($next, 0, $temp1));
            }

            $jsontemp = strlen($json[$i]);

            $temp1 = $pos+$jsontemp+34;

            /*SUITE*/
            if ($next == "tyrolium1234"){
                $next = substr($content, $temp1);
            } else{
                $next = substr($next, $temp1);
            }

        }
    }

    //var_dump($next);
    if (!empty($next) && $next != "tyrolium1234"){
        array_push($arrayMSG, $next);
    } else {
        array_push($arrayMSG, $content);
    }

    return $arrayMSG;


}