<?php

//PROD or DEV
$APP_ENV = "PROD";


//Variable Share

$env_assets = "assets/";
$env_urlFile = "./extension/";

$env_logo = "assets/LogoBatirPositif.png";
$env_logoUrl = "assets/IconeBatirPositif.png";
$env_logoTransp = "assets/Logo.png";


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
);

