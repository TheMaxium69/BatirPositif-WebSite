<?php include "app.php"; ?>

<main>


    <?php
    echo "Page -> Home";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    ?>


    <h1 style="text-align: center">Bienvenue <?php echo $_SESSION['userNameLog']?></h1>
    <br>



<hr>

<div style="text-align: center">
    <p>Pour Modifier les informations générals du site je t'invite à allez sur cette page</p>
    <a class="btn btn-success" href="general.php">Général</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour Modifier/Ajouter/Supprimer des des utilisateur ayant acces à ce panel</p>
    <a class="btn btn-success" href="user.php">User</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour S'occuper des article disponible sur la page blog du site</p>
    <a class="btn btn-success" href="blog.php">Blog</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour mettre des images sur les projet dans la galery du site</p>
    <a class="btn btn-success" href="galery.php">Galery</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour consulter toute les prise de contact des utilisateur</p>
    <a class="btn btn-success" href="contact.php">Contact</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour recupere toute les mails des inscrit à la newsletter</p>
    <a class="btn btn-success" href="newsletter.php">Newsletter</a>
</div>








</main>


</body> </html>