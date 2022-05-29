<?php include "app/app.php"; $page = 7; head($page); ?>
<body> <?php navbar($page); ?>

<?php
if (empty($_GET['n'])){
    $url = "blog.php";
    header('Location: '. $url);
}

require "db/function.php";

$blogs = getAllBlog();

foreach ($blogs as $blog){

    if ($blog['id'] == $_GET['n']){
        $article = $blog;
    }

}

?>

<main>

    <section id="article">

        <div id="art-img"></div>

        <h2>
            <?php echo $article['title']; ?>
        </h2>

        <p>
            <?php
            $content = nl2br($article['content']);
            echo $content;
            ?>
        </p>
        <small>
            <?php

            $dateSrc = $article['date'];
            $dateTime = new DateTime($dateSrc);
            echo $dateTime->format('H:i d/m/y');

            ?>
        </small>
        <br><br>

        <hr>

    </section>

    <br><br><br><br>

    <style>
        #art-img{
            background: center / 80% no-repeat url("assets/upload/<?php echo $article['pictureBack']; ?>"),
            content-box radial-gradient(#ffffff, #d4d3d3);
        }

        l{
            font-size: 23px;
            margin: 0 130px;
        }

        j{
            font-size: 2em;
            margin: 0 130px;
        }

        u{
            text-decoration: underline;
        }

        p{
            font-size: 1.6rem;
        }

        .articleImageInterne{
            max-width: 100%;
        }

    </style>

</main>

<?php footer($page); ?></body> </html>
