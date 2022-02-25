<?php include "app/app.php"; $page = 4; head($page); ?>
<body> <?php navbar($page); ?>

<?php
if (empty($_GET['n'])){
    $url = "blog.php";
    header('Location: '. $url);
}
?>

<main>


    <?php

    $article = $env_test[$_GET['n']];

    ?>


    <section id="article">

        <div id="art-img"></div>

        <style>
            #art-img{

                width: 100%;
                height: 228px;
                background: center / 80% no-repeat url("assets/upload/<?php echo $article['picture']; ?>"),
                content-box radial-gradient(#ffffff, #d4d3d3);

            }
        </style>

        <h2>

            <?php echo $article['title']; ?>

        </h2>

        <style>

            #article h2{
                text-align: center;
                margin: 62px;
            }
        </style>

        <p>

            <?php

            $content = nl2br($article['content']);

            echo $content;

            ?>

        </p>

        <style>

            #article p{
                margin: 0 130px;
                margin-bottom: 95px;
            }

            #article p br{
                content: "";
                display: block;
                margin-bottom: 1em;
            }

        </style>


        <hr>


    </section>











</main>

<?php footer($page); ?></body> </html>
