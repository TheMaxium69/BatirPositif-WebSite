<?php include "app.php"; navbar(4); ?>

<main>

    <?php
    echo "Page -> Blog";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['send'])){
        $idBlog = $_GET['send'];
        draftsBlog($idBlog, 1);
    }

    if (!empty($_GET['unSend'])){
        $idBlog = $_GET['unSend'];
        draftsBlog($idBlog, 2);
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

        if ($_GET['create'] == true){

            /*PICTURE UP*/
            if (exif_imagetype($_FILES['picture']['tmp_name']) == 2 || exif_imagetype($_FILES['picture']['tmp_name']) == 3){
                $path = '../assets/upload/'. $_FILES['picture']['name'];
                move_uploaded_file($_FILES['picture']['tmp_name'], $path);
                $verif = 1;

            }
            /*PICTUREBACK UP*/
            if (exif_imagetype($_FILES['pictureBack']['tmp_name']) == 2 || exif_imagetype($_FILES['pictureBack']['tmp_name']) == 3){
                $path = '../assets/upload/'. $_FILES['pictureBack']['name'];
                move_uploaded_file($_FILES['pictureBack']['tmp_name'], $path);
                $verif = 1;
            }

            /*IMG-CONTENT UP*/
            $arrayIMG = array();
            if ($nbImage != 0){
                for ($i = 1; $i <= $nbImage; $i++) {
                    $imageI = "image" . $i;
                    $contentI = "content" . $i;
                        if (exif_imagetype($_FILES[$imageI]['tmp_name']) == 2 || exif_imagetype($_FILES[$imageI]['tmp_name']) == 3){
                            $path = '../assets/upload/'. $_FILES[$imageI]['name'];
                            move_uploaded_file($_FILES[$imageI]['tmp_name'], $path);
                        } else {
                            $verif = 0;
                        }
                    $htmlImageI = '<br><img src="assets/upload/' . $_FILES[$imageI]['name']  .'" class="articleImageInterne"><br>';
                    $content = $content . $htmlImageI . $_POST[$contentI];
                    array_push($arrayIMG, $_FILES[$imageI]['name']);
                }
            }

            /*VERIF*/
            if ($verif == 1){
                createBlog($title, $content, $_FILES['picture']['name'], $_FILES['pictureBack']['name'], $arrayIMG);
            }
        }

    }

    if (!empty($_GET['edit']) && !empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])){

        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $nbImage = $_POST['nbImage'];
        $arrayIMG = array();

        $noEditBlog = getOneBlog($id);
        $arrayJson = $noEditBlog['json'];
        $oldArray = json_decode($arrayJson);

        /*var_dump($_POST);
        var_dump($_FILES);
        var_dump($oldArray);*/

        if ($_GET['edit'] == true){

            /*PICTURE UP*/
            if ($_FILES['picture']['size'] > 0) {
                if (exif_imagetype($_FILES['picture']['tmp_name']) == 2 || exif_imagetype($_FILES['picture']['tmp_name']) == 3){
                    $path = '../assets/upload/'. $_FILES['picture']['name'];
                    move_uploaded_file($_FILES['picture']['tmp_name'], $path);
                }
                $picture = $_FILES['picture']['name'];
            } else {
                $picture = $noEditBlog['picture'];
            }
            /*PICTUREBACK UP*/
            if ($_FILES['pictureBack']['size'] > 0) {
                if (exif_imagetype($_FILES['pictureBack']['tmp_name']) == 2 || exif_imagetype($_FILES['pictureBack']['tmp_name']) == 3) {
                    $path = '../assets/upload/' . $_FILES['pictureBack']['name'];
                    move_uploaded_file($_FILES['pictureBack']['tmp_name'], $path);
                }
                $pictureBack = $_FILES['pictureBack']['name'];
            } else {
                $pictureBack = $noEditBlog['pictureBack'];
            }




            /*IMG-CONTENT UP*/
            if ($nbImage != 0){

                $oldImgnb = count($oldArray);

                $newImagenb = $nbImage - $oldImgnb;

                /*OLD IMG VERIF*/
                for ($i = 1; $i <= $nbImage-$newImagenb; $i++) {

                    $imgName = "";

                    $imageI = "image" . $i;
                    $contentI = "content" . $i;

                    if ($_FILES[$imageI]['size'] > 0){
                        /*PUSH*/
                        if (exif_imagetype($_FILES[$imageI]['tmp_name']) == 2 || exif_imagetype($_FILES[$imageI]['tmp_name']) == 3){
                            $path = '../assets/upload/'. $_FILES[$imageI]['name'];
                            move_uploaded_file($_FILES[$imageI]['tmp_name'], $path);
                        } else {
                            $verif = 0;
                        }
                        $imgName = $_FILES[$imageI]['name'];
                    } else {
                        $imgName = $oldArray[$i-1];
                    }

                    /*ENCODE*/
                    $htmlImageI = '<br><img src="assets/upload/' . $imgName  .'" class="articleImageInterne"><br>';
                    $content = $content . $htmlImageI . $_POST[$contentI];
                    array_push($arrayIMG, $imgName);

                }

                /*NEW IMG*/

                for ($i = 1; $i <= $nbImage-$oldImgnb; $i++) {

                    $j = $i + $oldImgnb;
                    $imageI = "image" . $j;
                    $contentI = "content" . $j;

                    /*PUSH*/
                    if (exif_imagetype($_FILES[$imageI]['tmp_name']) == 2 || exif_imagetype($_FILES[$imageI]['tmp_name']) == 3){
                        $path = '../assets/upload/'. $_FILES[$imageI]['name'];
                        move_uploaded_file($_FILES[$imageI]['tmp_name'], $path);
                    } else {
                        $verif = 0;
                    }

                    /*ENCODE*/
                    $htmlImageI = '<br><img src="assets/upload/' .  $_FILES[$imageI]['name'] .'" class="articleImageInterne"><br>';
                    $content = $content . $htmlImageI . $_POST[$contentI];
                    array_push($arrayIMG, $_FILES[$imageI]['name']);
                }

            }

            /*$testArray = array($id, $title, $content, $picture, $pictureBack, $arrayIMG);
            var_dump($testArray);*/
            updateBlog($id, $title, $content, $picture, $pictureBack, $arrayIMG);

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
            <th scope="col">Miniature</th>
            <th scope="col">Fond</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
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

                    echo substr($content, 0, 100) . " <!-- EN CAS ERREUR --> <a class='td' href='../article.php?n=" . $article['id'] . "'>[...]</a>"; ?></td>
                <td><a class="td" href="../assets/upload/<?php echo $article['picture'] ?>"><?php echo $article['picture'] ?></a></td>
                <td><a class="td" href="../assets/upload/<?php echo $article['pictureBack'] ?>"><?php echo $article['pictureBack'] ?></a></td>
                <td><?php echo $article['date']; ?></td>
                <td><?php if ($article['status'] == 0){echo "En Brouillons 🔴"; }else{ echo "Publier 🟢"; } ?></td>
                <td><a href="?del=<?php echo $article['id']; ?>"><i class="fas fa-trash"></i></a><a href="formBlog.php?mode=edit&idblog=<?php echo $article['id'] ?>"><i class="fas fa-edit"></i></a><?php if ($article['status'] == 0){ ?><a href="?send=<?php echo $article['id'] ?>"><i class="fas fa-paper-plane"></i></a><?php } else { ?><a href="?unSend=<?php echo $article['id'] ?>"><i class="fas fa-eraser"></i></a><?php } ?></td>
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