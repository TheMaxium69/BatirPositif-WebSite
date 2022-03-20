<?php include "app.php"; navbar(4); ?>

<main>

    <?php
    echo "Page -> Blog";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idBlog = $_GET['del'];
        delBlog($idBlog);
    }

    if (!empty($_GET['create']) && !empty($_POST['title']) && !empty($_POST['content'])){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $nbImage = $_POST['nbImage'];
        $verif = 0;

//        var_dump($_POST);


        if ($_GET['create'] == true){

//            var_dump($_FILES);
//            var_dump(exif_imagetype($_FILES['picture']['tmp_name']));

            if (exif_imagetype($_FILES['picture']['tmp_name']) == 2 || exif_imagetype($_FILES['picture']['tmp_name']) == 3){

                $path = '../assets/upload/'. $_FILES['picture']['name'];

                move_uploaded_file($_FILES['picture']['tmp_name'], $path);

//                createBlog($title, $content, $_FILES['picture']['name']);

                $verif = 1;

            }


            if ($nbImage != 0){

                for ($i = 1; $i <= $nbImage; $i++) {

                    $imageI = "image" . $i;
                    $contentI = "content" . $i;

                        if (exif_imagetype($_FILES[$imageI]['tmp_name']) == 2 || exif_imagetype($_FILES[$imageI]['tmp_name']) == 3){

                            $path = '../assets/upload/galery/'. $_FILES[$imageI]['name'];

                            move_uploaded_file($_FILES[$imageI]['tmp_name'], $path);
                        } else {
                            $verif = 0;
                        }

                    $htmlImageI = '<br><img src="assets/upload/galery/' . $_FILES[$imageI]['name']  .'" class="articleImageInterne"><br>';

                    $content = $content . $htmlImageI . $_POST[$contentI];

                }



            }

            if ($verif == 1){

                createBlog($title, $content, $_FILES['picture']['name']);
            }





        }

    }


    ?>

    <div class="container py-5">

        <p>Créer un article</p>

        <a class="btn btn-success" href="formBlog.php?mode=create">Nouvelle article</a>


    </div>

    <table class="container py-5">
        <h4 class="container">Tout les articles</h4>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Contenu</th>
            <th scope="col">Image</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllBlog = getAllBlog();

        foreach ($AllBlog as $article){

            ?>
            <tr>
                <td><?php echo $article['title'] ?></td>
                <td><?php
                    $content = $article['content'];

                    $content = str_replace("<br><img src=", "<!-- ", $content);
                    $content = str_replace('class="articleImageInterne"><br>', " -->", $content);

                    echo substr($content, 0, 100) . " <a class='td' href='../article.php?n=" . $article['id'] . "'>[...]</a>"; ?></td>
                <td><a class="td" href="../assets/upload/<?php echo $article['picture'] ?>"><?php echo $article['picture'] ?></a></td>
                <td><?php echo $article['date']; ?></td>
                <td><a href="?del=<?php echo $article['id']; ?>"><i class="fas fa-trash"></i></a><!--<a href="formBlog.php?mode=edit&id=<?php /*echo $article['id'] */?>"><i class="fas fa-edit"></i></a>--></td>
            </tr>

            <?php
        }
        ?>
        <style>
            i.fas {
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