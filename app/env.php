<?php

//PROD or DEV
$APP_ENV = "DEV";

if ($APP_ENV == "PROD"){
    include "/var/www/reCAPTCHA-bt.php";
    
    $env_captcha_clientid = $BatirPositif_ClientID;
    $env_captcha_servid = $BatirPositif_ServID;

} else if ($APP_ENV == "DEV"){
    include "E:/LocalHost/reCAPTCHA-bt.php";
    
    $env_captcha_clientid = $Localhost_ClientID;
    $env_captcha_servid = $Localhost_ServID;

}

//Variable Share

$env_assets = "assets/";
$env_urlFile = "./extension/";

$env_logo = "assets/LogoBatirPositif.png";
$env_logoUrl = "assets/IconeBatirPositif.png";
$env_logoTransp = "assets/logo.png";


$env_navImg = "https://37.media.tumblr.com/8b4969985e84b2aa1ac8d3449475f1af/tumblr_n3iftvUesn1snvqtdo1_1280.jpg";

$env_page = array(
    //404
    0 => "404 | Erreur",
    //Page
    1 => array(
        "title" => "Accueil | Bâtir Positif",
        "name" => "Accueil",
        "file" => "./",
        "css" => "index",
    ),
    2 => array(
        "title" => "Nos Offres | Bâtir Positif",
        "name" => "Nos offres",
        "file" => "offre.php",
        "css" => "offre",
    ),

    3 => array(
        "title" => "Home Page | Bâtir Positif",
        "name" => "Qui sommes-nous ?",
        "file" => "about.php",
        "css" => "about",
    ),
    4 => array(
        "title" => "Blog | Bâtir Positif",
        "name" => "Blog",
        "file" => "blog.php",
        "css" => "blog",
    ),
    5 => array(
        "title" => "Contact | Bâtir Positif",
        "name" => "Contact",
        "file" => "form.php",
        "css" => "form",
    ),
    6 => array(
        "title" => "Mention Legal | Bâtir Positif",
        "name" => "Mention",
        "file" => "legal.php",
        "css" => "legal",
    ),
    7 => array(
        "title" => "Article | Bâtir Positif",
        "name" => "Article",
        "file" => "article.php",
        "css" => "article",
    ),
);

$env_test = array(

    1 => array(

        "id" => 1,
        "title" => "JeSuisUnTitre",
        "picture" => "test.png",
        "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "date" => new DateTime(),
    ),

    2 => array(
        "id" => 2,
        "title" => "JeSuisUnTitre2",
        "picture" => "2.png",
        "content" => "salut \n
        \nje m'appel maxime tournier \n
        \net je suis beau",
        "date" => new DateTime(),
    ),

    3 => array(
        "id" => 3,
        "title" => "JeSuisUnTitre2",
        "picture" => "2.png",
        "content" => "salut \n
        \nje m'appel maxime tournier \n
        \net je suis beau",
        "date" => new DateTime(),
    ),

    4 => array(
        "id" => 4,
        "title" => "JeSuisUnTitre2",
        "picture" => "2.png",
        "content" => "salut \n
        \nje m'appel maxime tournier \n
        \net je suis beau",
        "date" => new DateTime(),
    ),

    5 => array(
        "id" => 5,
        "title" => "JeSuisUnTitre2",
        "picture" => "2.png",
        "content" => "salut \n
        \nje m'appel maxime tournier \n
        \net je suis beau",
        "date" => new DateTime(),
    ),

    6 => array(
        "id" => 6,
        "title" => "JeSuisUnTitre2",
        "picture" => "2.png",
        "content" => "salut \n
        \nje m'appel maxime tournier \n
        \net je suis beau",
        "date" => new DateTime(),
    ),


);



