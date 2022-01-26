<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <?php navbar($page); ?>

<main>
    <section id="page1-headimg">
        <div id="img">
            <div id="center">
                <h1><img src="<?php echo $env_logoTransp; ?>"></h1>
                <h1 class="bold uppercase">
                    CONSTRUCTION - rénovation
                </h1>
                <p class="uppercase">
                    Spécialisés dans l’accompagnement de vos projets
                </p>
            </div>
        </div>

    </section>


    <section id="page1-about">
        <div class="container row">

            <div class="col-6">
            <h2>Bienvenue chez Bâtir positif</h2>

                <p>Bureau d’études spécialisé dans l’accompagnement et le soutien de vos projets.
                    Vous voulez construire, ou rénover de manière <b class="bold underline">responsable</b> ? Notre expertise pourra vous
                    orienter ! particuliers ou professionnels, nous sommes opérationnels.</p><p>
                    Spécialisés dans les bâtiments à faible consommation énergétique et avec un impact
                    environnemental positif, nous intervenons à différents moments de votre projet. <b class="bold">Travaillons
                    ensemble pour trouver les solutions les plus pertinentes et responsables.</b> <br> Mais
                    surtout, rendons ce projet convivial.</p>

            <?php custombtn("about.php", "Voir plus", "white", "#4d8d4c"); ?>
            </div>
            <div class="col-6">

                <img src="assets/Sans titre.png" style="


">

            </div>
        </div>
    </section>


    <section id="page1-list">

        <div id="card" class="row container" style="max-width: 1150px">

            <div class="col-6 cards">
                <i class="fas fa-home"></i>
                <h2>CONSTRUCTION</h2>
                <p>Accompagnement à différents niveaux <br> de votre
                    projet construction : conception,<br>  exécution, coordination...</p>
                <a class="bold" href="offre.php?off=0">En savois plus</a>
            </div>

            <div class="col-6 cards">
                <i class="fas fa-tools"></i>
                <h2>RÉNOVATION</h2>
                <p>Accompagnement de votre ambition de rénovation : diagnostic, conception des nouveaux plans,<br> audit,
                    exécution...</p>
                <a class="bold" href="offre.php?off=1">En savois plus</a>
            </div>
        </div>

    </section>

    <section id="page1-form">
            <div class="container">
                <h2>Pour aller plus loin :</h2>
                <div style="
">
                    <article class="first">
                        <div class="titleService"><h3><i class="fas fa-home"></i> DEVIS GRATUIT</h3></div>
                        <p>Effectuez une demande de devis gratuitement
                            pour un audit énergétique, AMO, maîtrise d'éxecution</p>
                        <?php custombtn("form.php?name=1", "Devis Gratuit", "white", "#4d8d4c"); ?>
                    </article>

                    <div class="row">
                        <article class="col-6">
                            <div class="titleService"><h3><i class="fas fa-handshake"></i> DEMANDE DE PARTENARIAT</h3></div>
                            <p>Effectuez une demande de partenariat pour
                                collaborer avec Bâtir Positif</p>
                            <?php custombtn("form.php?name=2", "Demande de partenariat", "white", "#4d8d4c"); ?>
                        </article>

                        <article class="col-6">
                            <div class="titleService"><h3><i class="fas fa-building"></i> ACCOMPAGNEMENT DECRÊT TERTIAIRE</h3></div>
                            <p>Faites vous accompagner dans vos démarches
                                vis-à-vis du décret tertiaire</p>
                            <?php custombtn("form.php?name=3", "Faites-vous accompagner", "white", "#4d8d4c"); ?>
                        </article>
                    </div>
                </div>
        </div>



    </section>

    <hr style="
    height: 1px;
    background: #b9b7b7;
    max-width: 900px;
    margin: 35px auto;">

    <section id="page1-blog" class="container row">

        <div class="col-6">

            <h2>Nos articles :</h2>
            <div id="carousel-Blog" class="carousel slide " data-ride="carousel">




                <ol class="carousel-indicators">
                    <li data-target="#carousel-Blog" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-Blog" data-slide-to="1"></li>
                    <li data-target="#carousel-Blog" data-slide-to="2"></li>
                    <li data-target="#carousel-Blog" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coucou</h5>
                            <p>Coucou</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coucou</h5>
                            <p>Coucou</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Est-ce que tu aime la vie ?</p>
                            <h5>6 min </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coucou</h5>
                            <p>Coucou</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-Blog" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-Blog" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <style>
            #page1-blog{
                padding: 50px 0px 67px 0px;
            }
            #page1-blog h2{

                text-align: center;
                padding-bottom: 35px;
            }
        </style>

        <div class="col-6">

            <h2 class="padd-mob">Nos partenaires :</h2>

            <div class="img">
            <img class="p1" src="https://batirpositif.files.wordpress.com/2021/03/oikos.png">

            <img class="p2" src="https://batirpositif.files.wordpress.com/2021/07/capture-decran-2021-03-11-110853-edited.png">

            <img class="p3" src="https://batirpositif.files.wordpress.com/2021/03/image18-1.png">
            </div>

        </div>







    </section>

    <section id="Popup">
        <div class="fixed-bottom">
            <div style="">
                <a href="blog.php">
                    <i class="far fa-newspaper" style="margin-top: 17px;"></i>
                </a>
            </div>

        </div>

    </section>

<!---->
<!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo-->
<!--        nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.</p>-->


</main>



<?php footer($page); ?></body> </html>