<?php

require "composant/head.phtml";
require "../db/app.php";
session_start();
?>
    <header id="nav-desktop">
        <div class="clear"></div>
        <?php if (!empty($_SESSION['userIdLog'])){ ?>
            <nav class="fixed-header">
                <div class="site-title visible-title"><a href="../"><img src="../assets/LogoBatirPositifT.png"></a></div>

                <ul class="">
                    <li>
                        <a class="btn" href="home.php">Accueil</a>
                    </li>
                    <li>
                        <a class="btn" href="general.php">Général</a>
                    </li>
                    <li>
                        <a class="btn" href="user.php">User</a>
                    </li>
                    <li>
                        <a class="btn" href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a class="btn" href="galery.php">Galery</a>
                    </li>
                    <li>
                        <a class="btn" href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="btn" href="newsletter.php">Newsletter</a>
                    </li>
                    <li>
                        <form class="form-inline" method="POST" action="?logout=true">
                            <button class="btn my-2 my-sm-0" type="submit" style="color: red">Déconnexion</button>
                        </form>
                    </li>
                </ul>
            </nav>
        <?php } else { ?>
            <nav class="fixed-header">
                <div class="site-title visible-title"><a href="../"><img src="../assets/LogoBatirPositifT.png"></a></div>
            </nav>
        <?php } ?>
    </header>
<?php


if (!empty($_GET['logout'])){
    session_unset();
}

function form($isWonk = null){

    if ($isWonk){
        echo "louper";
    }

    ?>

    <div class="container py-5">
        <form method="POST">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <button type="submit" class="btn btn-success">Se Connecter</button>
        </form>
    </div>

    <?php


}