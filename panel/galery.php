<?php include "app.php"; navbar(5); ?>

<main>


    <?php
    echo "Page -> Galery";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idGalery = $_GET['del'];
        delGalery($idGalery);
    }

    if (!empty($_GET['create'])){

        if (!empty($_POST['title'])){

            $title = $_POST['title'];

        } else {

            $title = null;
        }


        if ($_GET['create'] == true){

            if (exif_imagetype($_FILES['new']['tmp_name']) == 2 || exif_imagetype($_FILES['new']['tmp_name']) == 3){

                $path = '../assets/upload/galery/'. $_FILES['new']['name'];

                move_uploaded_file($_FILES['new']['tmp_name'], $path);

                createGalery($title, $_FILES['new']['name']);

            }

        }

    }

    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "galery"){ $isGalery = $EnvSection; }
    }
    ?>
    <br>
    <br>
    <div class="container">
        <?php if ($isGalery['content'] == "true"){ ?>
            <div class="alert alert-success" role="alert">
                La galerie est bien activé
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                La galerie est désactivé
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>

    </div>

    <div class="container py-5">

        <form method="POST" action="galery.php?create=true" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nouvelle Image</label>
                <input type="file" name="new" class="form-control-file" accept="image/png, image/jpeg" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" class="form-control" name="title">
                <small id="emailHelp" class="form-text text-muted">Non Obligatoire.</small>
            </div>


            <button type="submit" class="btn btn-success">Envoyé</button>

        </form>

    </div>

    <table class="container py-5">
        <h4 class="container">Galerie</h4>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Titre</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllGalery = getAllGalery();

        foreach ($AllGalery as $galery){ ?>

            <tr>

                <td><a class="td" href="../assets/upload/galery/<?php echo $galery['picture'] ?>"><?php echo $galery['picture'] ?></a></td>
                <td><?php echo $galery['text'] ?></td>
                <td><a href="?del=<?php echo $galery['id']; ?>"><i class="fas fa-trash"></i></a></td>

            </tr>

            <?php
        }
        ?>

        <style>
            i {
                color: #4D8D4C;
            }
            a.td {
                color: #4D8D4C;
            }
        </style>
    </table>

    <br>


</main>


</body> </html>