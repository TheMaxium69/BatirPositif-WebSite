<?php include "app.php"; navbar(4); ?>

<main>

    <?php
    echo "Page -> Blog";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (empty($_GET['mode'])){
        header("location: blog.php");
    } else {
        if ($_GET['mode'] == "create"){
            $mode = 1;
        }
        if ($_GET['mode'] == "edit"){
            $mode = 2;
        }
    }
    ?>


    <div class="container py-5">

        <h2>
        <?php
        if ($mode == 1){
            echo "Création d'un article";
        } else if ($mode == 2){
            echo "Editions de votre article";
        }

        ?>
        </h2>

        <br>
        <form method="POST" action="blog.php?create=true" enctype="multipart/form-data">

            <div class="form-group">
                <label>Titre de l'article</label>
                <input type="text" class="form-control" name="title" required>
            </div>


            <div class="form-group">
                <label>Miniature de l'article</label>
                <input type="file" name="picture" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label>Contenue de votre article</label>
                <textarea class="form-control" rows="25" name="content" required></textarea>
            </div>



            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Je confirme publier ça sur le site web</label>
            </div>

            <button type="submit" class="btn btn-success">Envoyé</button>


        </form>

    </div>
    <br>





</main>

</body> </html>