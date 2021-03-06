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
        if ($_GET['mode'] == "edit" && !empty($_GET['idblog'])){
            $mode = 2;
            $blogId = $_GET['idblog'];
        } else {
            $mode = 1;
        }
    }
    ?>

    <div class="container py-5">

        <?php
        if ($mode == 2){

        $OneBlog = getOneBlog($blogId);
        $arrayImg = json_decode($OneBlog['json']);
        $arrayMsg = uncodeContentBlog($OneBlog['content'], $arrayImg);

        /*var_dump($OneBlog);
        var_dump($arrayMsg);*/


            if ($OneBlog['status'] == 1){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Alerte!</strong> Vous editer un article qui est publier. Il est recommander de le mettre en brouillons pour l'editer
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
        } ?>

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
        <form method="POST" action="blog.php?<?php if ($mode == 1){ echo "create=true"; } else { echo "edit=true"; } ?>" enctype="multipart/form-data">

            <?php if ($mode == 2){ echo "<input type='hidden' name='id' value='". $OneBlog['id'] ."'>"; } ?>

            <div class="form-group">
                <label>Titre de l'article</label>
                <input type="text" class="form-control" name="title" required <?php if ($mode == 2){ echo "value='". $OneBlog['title'] ."'"; } ?>>
            </div>


            <div class="form-group">
                <label>Miniature de l'article (Format 1:1)</label>
                <?php if ($mode == 2){
                    echo "<p style='margin-bottom: 0;'>Actuellement poster :</p>" .
                         "<a href='../assets/upload/". $OneBlog['picture']  ."'><img style='width: 90px; margin-bottom: 10px' src='../assets/upload/". $OneBlog['picture']  ."'></a>" .
                         "<br>";
                } ?>
                <input type="file" name="picture" class="form-control-file" accept="image/png, image/jpeg" <?php if ($mode == 1){ echo "required"; } ?>>
            </div>

            <div class="form-group">
                <label>Fond de l'article (Format 22:9)</label>
                <?php if ($mode == 2){
                    echo "<p style='margin-bottom: 0;'>Actuellement poster :</p>" .
                        "<a href='../assets/upload/". $OneBlog['pictureBack']  ."'><img style='width: 100px; margin-bottom: 10px' src='../assets/upload/". $OneBlog['pictureBack']  ."'></a>" .
                        "<br>";
                } ?>
                <input type="file" name="pictureBack" class="form-control-file" accept="image/png, image/jpeg" <?php if ($mode == 1){ echo "required"; } ?>>
            </div>

            <hr>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Petit Rappel</strong><br>
                - Sous ligner : <j>&lt;u&gt;&lt;/u&gt;</j><br>
                - Text Gras : <j>&lt;b&gt;&lt;/b&gt;</j><br>
                - Italique : <j>&lt;i&gt;&lt;/i&gt;</j><br>
                - Titre : <j>&lt;j&gt;&lt;/j&gt;</j><br>
                - Sous-titre : <j>&lt;l&gt;&lt;/l&gt;</j>


                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php if ($mode == 1){ ?>
            <div class="form-group">
                <label>Contenue de votre article</label>
                <textarea class="form-control" rows="10" name="content" required><?php if ($mode == 2){ echo $OneBlog['content']; } ?></textarea>
            </div>

            <div class="plus">
                <input class='baInput' type='hidden' name='nbImage' value='0'>
                <a class="btn btn-outline-success ba1" href="javascript:img(1)">Plus</a>
            </div>

            <?php } else if ($mode == 2){

                /*var_dump($arrayMsg);
                var_dump($arrayImg);*/

                for ($i = 0; $i <= count($arrayImg)-1; $i++){

                    ?>

                    <div class="form-group">
                        <label>Contenue de votre article</label>
                        <textarea class="form-control" rows="10" name="content<?php if ($i != 0){ echo $i; } ?>" required><?= $arrayMsg[$i] ?></textarea>
                    </div>

                    <div class="form-group">
                        <p style='margin-bottom: 0;'>Actuellement poster :</p>
                        <a href='../assets/upload/<?= $arrayImg[$i] ?>'><img style='width: 100px; margin-bottom: 10px' src='../assets/upload/<?= $arrayImg[$i] ?>'></a>
                        <br>
                        <input type="file" name="image<?= $i+1 ?>" class="form-control-file" accept="image/png, image/jpeg">
                    </div>

                    <?php
                }
                if (!empty($arrayMsg[$i])){
                    ?>

                    <div class="form-group">
                        <label>Contenue de votre article</label>
                        <textarea class="form-control" rows="10" name="content<?php if ($i != 0){ echo $i; } ?>" required><?= $arrayMsg[$i] ?></textarea>
                    </div>

                    <?php
                }

                ?>

                <div class="plus">
                    <input class='baInput' type='hidden' name='nbImage' value='<?= $i ?>'>
                    <a class="btn btn-outline-success ba<?= $i+1 ?>" href="javascript:img(<?= $i+1 ?>)">Plus</a>
                </div>

                <?php
            } ?>


            <hr>


            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Je confirme publier ça sur le site web</label>
            </div>

            <?php if ($mode == 1) {?>
            <button type="submit" class="btn btn-success">Envoyé</button>
            <?php } else if ($mode == 2) {?>
            <button type="submit" class="btn btn-success">Sauvegarder la modifications</button>
            <a href="blog.php" class="btn btn-danger">Annuler</a>
            <?php } ?>

        </form>

        <hr>

    </div>
    <br>

    <style>
        j {
            color: mediumvioletred;
        }
    </style>

    <script>

        let divPlus = document.querySelector('div.plus');


        function img(nb){

            let btnSupp = document.querySelector('a.ba' + nb);
            let btnInfo = document.querySelector('input.baInput');

            divPlus.removeChild(btnSupp);
            divPlus.removeChild(btnInfo)

            let NewImg = '<div class="form-group"><label>Image</label> <input type="file" name="image'+ nb +'" class="form-control-file" accept="image/png, image/jpeg" required> </div>';

            let NextContenu = '<div class="form-group"> <label>Suite de votre article</label><textarea class="form-control" rows="10" name="content'+ nb +'" required></textarea> </div>'

            let inputInfo = "<input class='baInput' type='hidden' name='nbImage' value='"+ nb +"'>";

            console.log("Nb " + nb)

            nb = nb + 1;

            let btn = '<a class="btn btn-outline-success ba'+ nb +'" href="javascript:img('+ nb +')">Plus</a>'

            divPlus.innerHTML = divPlus.innerHTML + NewImg + NextContenu + inputInfo + btn





        }





    </script>

</main>

</body> </html>