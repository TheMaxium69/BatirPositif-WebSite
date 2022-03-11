<?php include "app/app.php"; $page = 4; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="blog-article">


        <div class="row" style="margin: unset">
            <div class="col-blog">
                <div class="container">
                <h1 style="text-align: center">
                    Actualités et articles
                </h1>
                <p style="text-align: center; color: black; padding-bottom: 35px;">
                    Bienvenue sur le blog de Bâtir positif. Si vous êtes intéressés par les thématiques de
                    la construction, de la rénovation (responsable, toujours!) et encore plus, vous êtes au

                    bon endroit pour trouver votre bonheur.
                </p>

                <hr style="padding-bottom: 35px;">

                </div>
                <div class="row d-flex justify-content-center" style="row-gap: 20px;
    column-gap: 30px;
    max-width: 1289px;
    ">

                    <?php

                    require "db/function.php";

                    $blogs = getAllBlog();

                    $articles = $blogs;

                    foreach ($articles as $article) {

                        $dateSrc = $article['date'];
                        $dateTime = new DateTime($dateSrc);

                        ?>

                        <div class="membre">
                            <img src="assets/upload/<?php echo $article['picture'] ?>" alt="" >

                            <div class="info to-top">
                                <h5 class="name"><?php echo $article['title'] ?></h5>
                                <p class="job"><?php echo $dateTime->format('d/m/y'); ?></p>
                            </div>

                            <div class="overly bottom">
                                <div class="middle">
                                    <h5 class="name"><?php echo $article['title'] ?></h5>
                                    <p class="job"><?php echo $dateTime->format('H:i d/m/y'); ?></p>
                                    <p class="text">
                                        <?php echo substr($article['content'], 0, 100) . "..."; ?>
                                    </p>
                                    <div class="social-icones">
                                        <a href="article.php?n=<?php echo $article['id'] ?>" >Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>







                    <!--membre 1-->
                    <!--<div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Est-ce que la vie est belle ?</h5>
                            <p class="job">6 min ago</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="membre">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="  job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="membre">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" alt="" >

                        <div class="info to-top">
                            <h5 class="name">Coucou</h5>
                            <p class="job">Coucou</p>
                        </div>

                        <div class="overly bottom">
                            <div class="middle">
                                <h5 class="name">Coucou</h5>
                                <p class="job">Coucou</p>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellat nobis perspiciatis molestiae tempora quasi. Nulla.
                                </p>

                                <div class="social-icones">
                                    <a href="#" >Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>-->

                </div>

            </div>


            <div id="news" class="col-news">

                <!--<div class="card-form sticky-top">
                    <form class="signup">
                        <div class="form-title">Newsletter</div>
                        <p style="color: black; padding-top: 10px">Découvrez notre vie d’entreprise !</p>
                        <div class="rule"></div>
                        <div class="form-body">
                            <div class="row">
                                <input type="text" placeholder="Email Address*">
                            </div>
                        </div>
                        <div class="form-footer">
                            <a>S'inscire ! <i class="fa fa-check"></i></a>
                        </div>
                    </form>
                </div>-->

                <div class="sticky-top">

                    <h2 style="padding-bottom: 14px">Newsletter :</h2>

                    <div class="card-form">
                        <form class="signup" action="db/newsletter.php" method="GET">
                            <div class="form-title text-white">Newsletter</div>
                            <p style="color: black; padding-top: 10px">Découvrez notre vie d’entreprise !</p>
                            <div class="rule"></div>
                            <div class="form-body">
                                <div class="row">
                                    <input type="text" name="mail" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-footer">
                                <input type="submit" value="S'inscire !">
                            </div>
                        </form>
                    </div>

                    <style>
                        #news p,
                        #news h2,
                        #news{
                            text-align: center;
                        }

                        #news a {
                            color: white;
                        }

                        .card-form {
                            /*margin-left: -120px;*/
                            /*width: 500px;*/
                            border-radius: 10px;
                            background: white;
                            box-shadow: 0 1px 22px 0 rgb(0, 0, 0, 30%), 0 17px 17px 0 rgb(0, 0, 0, 15%);
                        }

                        .card-form .form-title {
                            width: 100%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            height: 80px;
                            font-size: 20px;
                            font-weight: bold;
                            background: #4D8D4C;
                            border-radius: 10px 10px 0 0;
                        }
                        .card-form .form-body {
                            padding: 10px;
                        }
                        .card-form .form-body .row {
                            display: flex;
                            justify-content: space-around;
                            padding: 10px;
                        }
                        .card-form .form-body .row input[type=text] {
                            -webkit-appearance: none;
                            -moz-appearance: none;
                            appearance: none;
                            width: 100%;
                            margin: 0 15px;
                            height: 35px;
                            padding: 5px 15px;
                            border-radius: 5px;
                            outline: none;
                            border: none;
                            background: #e8ebed;
                            color: #576366;
                            font-size: 14px;
                        }
                        .card-form .rule {
                            height: 2px;
                            background: #e8ebed;
                            margin: 0px 35px;
                        }
                        .card-form .form-footer {
                            margin: 0 25px 15px 25px;
                            padding: 0px 10px 22px 10px;


                        }
                        .card-form .form-footer input {
                            color: white;
                            display: inline-block;
                            /*height: 40px;*/
                            line-height: 40px;
                            border: none;
                            border-radius: 5px;
                            padding: 5px 15px;
                            background: #4D8D4C;
                            margin-right: 10px;
                            font-size: 14px;
                        }
                        .card-form .form-footer input:hover {
                            transition: all 150ms linear;
                            opacity: 0.85;
                        }
                        .card-form .form-footer span {
                            margin-left: 8px;
                        }
                    </style>
                </div>


            </div>


        </div>

    </section>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
    <script  src="javascript/notif.js"></script>

    <?php if (!empty($_GET['err'])) {?>
        <script>
            if(Text != 1){
                iziToast.error({
                    title: 'Erreur',
                    position: 'bottomRight',
                    message: 'Une erreur est survenue | Code : <?php echo $_GET['err']; ?>'
                });
            }
        </script>
    <?php } ?>

    <?php if (!empty($_GET['true'])) {?>
        <script>
            if(Text != 1){
                iziToast.success({
                    title: 'OK',
                    position: 'bottomRight',
                    message: 'Votre demande a bien été envoyé !'
                });
            }
        </script>
    <?php } ?>

</main>




<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="javascript/article.js"></script>

<?php footer($page); ?></body> </html>