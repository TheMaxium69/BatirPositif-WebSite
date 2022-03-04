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

                    foreach ($articles as $article) { ?>

                        <div class="membre">
                            <img src="assets/upload/<?php echo $article['picture'] ?>" alt="" >

                            <div class="info to-top">
                                <h5 class="name"><?php echo $article['title'] ?></h5>
                                <p class="job"><?php

//                                        $date = $article['date'];
//
//                                        echo $date->format('d/m/y');

                                    ?></p>
                            </div>

                            <div class="overly bottom">
                                <div class="middle">
                                    <h5 class="name"><?php echo $article['title'] ?></h5>
                                    <p class="job"><?php

//                                        $date = $article['date'];
//
//                                        echo $date->format('H:i d/m/y');

                                        ?></p>
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

                <div class="card-form sticky-top">
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
                </div>


            </div>


        </div>

    </section>


</main>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="javascript/article.js"></script>

<?php footer($page); ?></body> </html>