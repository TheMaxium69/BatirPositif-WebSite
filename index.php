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
                <p class="uppercase" style="border-radius: 6px;">
                accompagner la réussite de vos projets à impact positif
                </p>
            </div>
        </div>


    </section>


    <section id="page1-about">
        <div class="container row">

            <div class="col-6">
            <h2>Bienvenue chez Bâtir Positif</h2>

                <p>Bureau d'études engagé dans l’accompagnement de vos projets responsables.
Spécialisés dans les bâtiments à faible consommation énergétique et à impact
environnemental positif, nous intervenons auprès des propriétaires de bâtiments, qu’ils
soient particuliers ou professionnels <br><br>
Vous êtes conscients des enjeux environnementaux et vous voulez contribuer à une
transition écologique et solidaire et de qualité de vie ?
Vous voulez faire évoluer, rénover ou construire votre habitation,
maison individuelle ou appartement ?<br>
Vous avez prévu d’optimiser l’usage de l'énergie de vos bâtiments tertiaires<br><br>
Alors, travaillons ensemble pour trouver et mettre en œuvre des solutions efficientes pour
votre budget, la santé et l’environnement !</p>

            <?php custombtn("about.php", "Voir plus", "white", "#4d8d4c"); ?>
            </div>
            <div class="col-6">

                <img src="assets/Biofib-isolation-naturelle-pose-saine-3.png" style="

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
                <a class="bold" href="offre.php?off=0">En savoir plus</a>
            </div>

            <div class="col-6 cards">
                <i class="fas fa-tools"></i>
                <h2>RÉNOVATION</h2>
                <p>Accompagnement de votre ambition de rénovation : diagnostic, conception des nouveaux plans,<br> audit,
                    exécution...</p>
                <a class="bold" href="offre.php?off=1">En savoir plus</a>
            </div>
        </div>

    </section>

    <section id="page1-form">
            <div >
                <div class="p46">

                    <div id="testrow" class="row">
                        <div class="col-4 d1"></div>
                        <div class="col-4 d2"></div>
                        <div class="col-4 d3"></div>
                    </div>

                    <div class="row" id="linkform">
                        <article class="col-4">
                            <div class="titleService"><h3 style="padding-top: 5px;"><i class="fas fa-home"></i> DEVIS GRATUIT</h3></div>
                            <p style="margin-top: -15px;
margin-bottom: 33px;">Effectuez une demande de devis gratuitement
                                pour un audit énergétique, AMO, maîtrise d'éxecution</p>
                            <?php custombtn("form.php?name=1", "Devis Gratuit", "white", "#4d8d4c"); ?>
                        </article>
                        <article class="col-4">
                            <div class="titleService"><h3><i class="fas fa-handshake"></i> DEMANDE DE<br> PARTENARIAT</h3></div>
                            <p style="padding-top: 16px;">Effectuez une demande de partenariat pour
                                collaborer<br> avec Bâtir Positif</p>
                            <?php custombtn("form.php?name=2", "Demande de partenariat", "white", "#4d8d4c"); ?>
                        </article>

                        <article class="col-4">
                            <div class="titleService"><h3><i class="fas fa-building"></i> ACCOMPAGNEMENT <br>DECRÊT TERTIAIRE</h3></div>
                            <p style="padding-top: 16px;">Faites vous accompagner dans vos démarches
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

    <section id="page1-blog" class="container row" style="
    padding-bottom: 37px;">

        <div class="col-6" id="news">

            <!--<h2 style="padding-bottom: 14px">Newsletter :</h2>

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
-->


            <h2>Nos articles :</h2>
            <div id="carousel-Blog" class="carousel slide " data-ride="carousel">
            <a href="blog.php">
                <?php

                require "db/function.php";

                $blogs = getAllBlog();

                $verif = verifBlogOnline();

                $articles = $blogs;



                if ($articles->num_rows == 0 || $verif->num_rows == 0) {

                    echo "<p style='text-align: center'>Il n'y a pas d'article disponible</p>";
                } else {
                ?>

                <ol class="carousel-indicators">
                    <?php if ($verif->num_rows >= 4) { ?>
                        <li data-target="#carousel-Blog" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-Blog" data-slide-to="1"></li>
                        <li data-target="#carousel-Blog" data-slide-to="2"></li>
                        <li data-target="#carousel-Blog" data-slide-to="3"></li>
                    <?php } else if ($verif->num_rows == 3) { ?>
                        <li data-target="#carousel-Blog" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-Blog" data-slide-to="1"></li>
                        <li data-target="#carousel-Blog" data-slide-to="2"></li>
                    <?php } else if ($verif->num_rows == 2) { ?>
                        <li data-target="#carousel-Blog" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-Blog" data-slide-to="1"></li>
                    <?php } else if ($verif->num_rows == 1) { ?>
                        <li data-target="#carousel-Blog" data-slide-to="0" class="active"></li>
                    <?php } }?>
                </ol>
                <div class="carousel-inner">
                    <?php

                    $i = 0;
                    $j = 0;


                    foreach ($articles as $article) {

                        $i = $i + 1;

                        if ($i >= 5){ ?>

                            <!--On Affiche pas-->

                        <?php } else if ($article['status'] != 0) {

                            $j = $j + 1;

                        $dateSrc = $article['date'];
                        $dateTime = new DateTime($dateSrc); ?>

                        <div class="carousel-item <?php if ($j == 1){ echo "active"; } ?> ">
                            <img src="assets/upload/<?php echo $article['picture'] ?>" class="d-block" style="
                                width: 400px;
                                margin: 0 auto;
                                height: 400px;" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p><?php echo $article['title']?></p>
                                <h5><?php echo $dateTime->format('d/m/y'); ?></h5>
                            </div>
                        </div>


                    <?php } }
                    ?>

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
        </a>
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

            <h2 class="padd-mob" style="text-align: center;">Nos partenaires :</h2>

            <div class="img" style=" padding-top: 48px;">


                <a href="http://uneplumealedifice.letscolab.co/"><img class="p2" src="assets/une-plume-a-ledifice-logo-V3.png"></a>
                <a href="https://oikos-ecoconstruction.com/"><img class="p1" src="assets/oikos.png"></a>
                <a href="https://www.capeb.fr/"><img class="p4" src="assets/certif/l3.png"></a>
                <a href="https://www.entreprendre-pour-apprendre.fr/auvergne-rhone-alpes"><img class="p3" src="assets/image18-1.png"></a>

            </div>

        </div>







    </section>

    <section id="Popup">
        <div class="fixed-bottom">
            <div style="">
                <a href="blog.php#news">
                    <i class="far fa-newspaper" style="margin-top: 17px;"></i>
                </a>
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



<?php footer($page); ?></body> </html>