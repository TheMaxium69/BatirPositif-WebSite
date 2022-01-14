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

    <section id="page1-form" class="container">

        <h2>
            Nos acccompagnements
        </h2>

        <article>
            <div class="titleService"> <h3><i class="fas fa-home"></i> DEVIS GRATUIT</h3> </div>
            <br>
            <p>Effectuez une demande de devis gratuitement
                pour un audit énergétique, AMO, maîtrise d'éxecution</p>
            <?php custombtn("form.php?name=1", "Devis Gratuit", "white", "green"); ?>
            <br>
        </article>

        <article>
            <div class="titleService"> <i class="fas fa-home"></i><h3>DEVIS GRATUIT</h3></div>
            <br>
            <p>Effectuez une demande de devis gratuitement
                pour un audit énergétique, AMO, maîtrise d'éxecution</p>
            <?php custombtn("form.php?name=1", "Devis Gratuit", "white", "green"); ?>
            <br>
        </article>

        <article>
            <div class="titleService"> <i class="fas fa-home"></i><h3>DEVIS GRATUIT</h3></div>
            <br>
            <p>Effectuez une demande de devis gratuitement
                pour un audit énergétique, AMO, maîtrise d'éxecution</p>
            <?php custombtn("form.php?name=1", "Devis Gratuit", "white", "green"); ?>
            <br>
        </article>



    </section>

    <section id="page1-blog">







    </section>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo
        nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.</p>


</main>



<?php footer(); ?></body> </html>