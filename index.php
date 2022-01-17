<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <?php navbar($page); ?>

<main>
    <section id="page1-headimg">
        <div id="img">
            <div id="center">
                <h1><img src="<?php echo $env_logoTransp; ?>"></h1>
                <h1 class="bold uppercase">
                    NEUF - rénovations - accompagnement
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

                <p>BÂTIR POSITIF se positionne comme un accompagnant dans les projets de construction, d’extension et de rénovation responsable.</p><p>

                Spécialisé en bâtiment à haute performance énergétique et à faible impact environnemental, BÂTIR POSITIF intervient sur des projets variés (maison individuelle, petit collectif, ERP…), avec la volonté d’aider les maîtres d’ouvrages à choisir les solutions les plus pertinentes et responsables.</p>

            <?php custombtn("https://tyrolium.fr", "Voir plus", "white", "green"); ?>
            </div>
            <div class="col-6">

                <img src="assets/City%20buildings_Flatline.svg">

            </div>
        </div>
    </section>


    <section id="page1-list">

        <div id="card" class="row container" style="max-width: 1160px">

            <div class="col-6 cards">
                <i class="fas fa-home"></i>
                <h2>neuf</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur cumque cupiditate debitis
                    explicabo facere facilis impedit itaque nisi officia officiis</p>
                <a href="https://tyrolium.fr">En savois plus</a>
            </div>

            <div class="col-6 cards">
                <i class="fas fa-house-damage"></i>
                <h2>renovation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur cumque cupiditate debitis
                    explicabo facere facilis impedit itaque nisi officia officiis</p>
                <a href="https://tyrolium.fr">En savois plus</a>
            </div>
        </div>

    </section>

    <section id="page1-form">
        <div id="background">
            <div class="container">
                <h2>Nos acccompagnements</h2>
                <article>
                    <div class="titleService"><h3><i class="fas fa-home"></i> DEVIS GRATUIT</h3></div>
                    <p>Effectuez une demande de devis gratuitement
                        pour un audit énergétique, AMO, maîtrise d'éxecution</p>
                    <?php custombtn("form.php?name=1", "Devis Gratuit", "black", "rgb(142, 248, 130)"); ?>
                </article>

                <article>
                    <div class="titleService"><h3><i class="fas fa-home"></i> DEMANDE DE PARTENARIAT</h3></div>
                    <p>Effectuez une demande de partenariat pour
                        collaborer avec Bâtir Positif</p>
                    <?php custombtn("form.php?name=2", "Demande de partenariat", "black", "rgb(142, 248, 130)"); ?>
                </article>

                <article>
                    <div class="titleService"><h3><i class="fas fa-home"></i> ACCOMPAGNEMENT DECRÊT TERTIAIRE</h3></div>
                    <p>Faites vous accompagner dans vos démarches
                        vis-à-vis du décret tertiaire</p>
                    <?php custombtn("form.php?name=3", "Faites-vous accompagner", "black", "rgb(142, 248, 130)"); ?>
                </article>
            </div>
        </div>



    </section>

    <section id="page1-blog" class="container row">

        <div class="col-6">

            <h2>Nos Article</h2>
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

            <h2>Nos Partenaire</h2>

            <div style="
    margin-left: 60px;

    margin-top: -27px;
">
            <img style="
    margin-left: 35px;" src="https://batirpositif.files.wordpress.com/2021/03/oikos.png">

            <img src="https://batirpositif.files.wordpress.com/2021/07/capture-decran-2021-03-11-110853-edited.png">

            <img src="https://batirpositif.files.wordpress.com/2021/03/image18-1.png">
            </div>

        </div>







    </section>
<!---->
<!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo-->
<!--        nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.</p>-->


</main>



<?php footer(); ?></body> </html>