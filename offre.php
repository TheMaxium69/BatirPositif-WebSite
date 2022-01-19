<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="offre-title" class="container">
        <h1>
            Nos offres
        </h1>

        <p>
            Un projet émerge dans votre idée ? Vous voulez construire ou rénover, mais ne savez pas comment vous pouvez vous faire accompagner ?</p>

        <p>Nous sommes là pour vous aider et ainsi vous faciliter le travail. Nous intervenons à
            différents moments de votre projet : conception, exécution, coordination.
        </p>

    </section>
    <hr style="
    height: 1px;
    background: #b9b7b7;
    max-width: 900px;
    margin: 35px auto;">

    <section id="offre-onglet" class="container">

        <!-- Liste des onglets -->
        <nav id="onglets">
            <?php
            $off = null;

            if (!empty($_GET['off'])){

                $off = $_GET['off'];

                if (1 == $off){ ?>

                    <ul>
                        <li class="onglet" style="">CONSTRUCTION</li>
                        <li class="onglet actif" style="">RÉNOVATION</li>
                    </ul>

                <?php } else { ?>
                    <ul>
                        <li class="onglet actif" style="">CONSTRUCTION</li>
                        <li class="onglet" style="">RÉNOVATION</li>
                    </ul>

                    <?php }
            } else { ?>
                <ul>
                    <li class="onglet actif" style="">CONSTRUCTION</li>
                    <li class="onglet" style="">RÉNOVATION</li>
                </ul>
            <?php } ?>
        </nav>

        <!-- Les contenus -->
        <article class="contenu <?php if ($off != 1){
            echo "actif";
        } ?>">

            <div class="container">
                <h1 style="text-align: center">Construction</h1>
                <h2 style="margin-left: 6%;">Shemats : </h2>

                <img style="    width: 624px;

    margin-left: 19.4%;" src="https://media.istockphoto.com/photos/abstract-grunge-black-texture-background-picture-id1131428317?k=20&m=1131428317&s=612x612&w=0&h=h5EkD1RYdMcGl121MLaX8jj3n1ttYSEbkOB5wUduD54=">


                <br><br>

                <h2 style="margin-left: 6%;">Plus d'info : </h2> <br>
                <ul style="list-style-type: disc;     width: 60%;" class="container">
                    <li><b class="bold">AMO: Assistance maîtrise d’ouvrage responsable :</b> il s’agit d’une mission de
                        <b class="uppercase">conseil</b> et de proposition vis-à-vis du maître d’ouvrage (vous, le client!) Notre objectif
                        est de suivre votre projet et de vous aider, de vous conseiller à prendre les
                        meilleures décisions pour votre projet. Et in fine, assurer un meilleur déroulement du
                        chantier ! Attention, l’AMO ne fait que conseiller. Il ne décide de rien !</li>
                    <li><b class="bold">MOE : Maîtrise d'œuvre d'exécution :</b> Cette mission concerne la coordination de la
                        mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                        expert suivra le bon déroulement du chantier de A à Z. Ici effectivement, nous
                        sommes décisionnaires !</li>
                    <li>
                        Accompagnement à l’auto-construction
                    </li>
                    <li>
                        Étude énergétique RE2020
                    </li>
                </ul>
            </div>

        </article>

        <article class="contenu <?php if ($off == 1){
            echo "actif";
        } ?>">



            <div class="container">
                <h1 style="text-align: center">Rénovation</h1>
                <h2 style="margin-left: 6%;">Shemats : </h2>

                <img style="    width: 624px;

    margin-left: 19.4%;" src="https://37.media.tumblr.com/8b4969985e84b2aa1ac8d3449475f1af/tumblr_n3iftvUesn1snvqtdo1_1280.jpg">


                <br><br>

                <h2 style="margin-left: 6%;">Plus d'info : </h2> <br>
                <ul style="list-style-type: disc;     width: 60%;" class="container">
                    <li><b class="bold">AMO: Assistance maîtrise d’ouvrage responsable :</b> il s’agit d’une mission de
                        <b class="uppercase">conseil</b> et de proposition vis-à-vis du maître d’ouvrage (vous, le client!) Notre objectif
                        est de suivre votre projet et de vous aider, de vous conseiller à prendre les
                        meilleures décisions pour votre projet. Et in fine, assurer un meilleur déroulement du
                        chantier ! Attention, l’AMO ne fait que conseiller. Il ne décide de rien !</li>
                    <li><b class="bold">MOE : Maîtrise d'œuvre d'exécution :</b> Cette mission concerne la coordination de la
                        mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                        expert suivra le bon déroulement du chantier de A à Z. Ici effectivement, nous
                        sommes décisionnaires !</li>
                    <li><b class="bold">DDT : Diagnostic technique :</b> Nous vous fournissons un rapport contenant tous les
                            diagnostics immobiliers obligatoires concernant la sécurité des futurs occupants du
                            bâtiment (exposition au plomb, présence d’amiante...) La santé avant tout !</li>
                    <li><b class="bold">Audit énergétique :</b> Nous faisons un “état des lieux” des performances énergétiques
                            de votre bien. Nous examinons le chauffage, l’isolation, la ventilation, etc. afin de
                            déterminer les points faibles et de construire le meilleur plan d’action pour que votre
                            bien devienne pauvre en consommation et plus responsable !</li>
                </ul>
            </div>



        </article>


    </section>

    <script src="javascript/offre.js"></script>

<br>

</main>



<?php footer(); ?></body> </html>