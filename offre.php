<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="offre-title" class="container" style="padding-bottom: 20px;">
        <h1>
            Nos offres
        </h1>

        <p>
            Un projet émerge dans votre tête ? Vous voulez construire ou rénover, mais ne savez pas comment vous pouvez vous faire accompagner ?</p>

        <p>Nous sommes là pour vous aider et ainsi vous faciliter le travail. Nous intervenons à
            différents moments de votre projet : conception, exécution, coordination.
        </p>

    </section>

    <section id="offre-onglet">
        <div class="container">
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

    <div class="divGlobal">
        <div  class="container containerstop">
        <!-- Les contenus -->
        <article class="contenu <?php if ($off != 1){
            echo "actif";
        } ?>">
            <div class="container containerstop">



                <div class="titlediv">
                    <h1 class="titleoffre uppercase" style="text-align: center">VOUS CONSTRUISEZ ?</h1>
                </div>

                <p class="container text-center">Nous vous accompagnons sur des constructions passives, pour un bilan
                    carbone neutre,<br class="br875"> en composant votre intérieur idéal.</p>

                <br>


                <section class="desktop">
                    <div id="shema">


                        <div class="l1 row borderB">
                            <article class="t col-4"><a href="?name=ac#upOne"><p>Accompagnement à<br> l’auto-construction</p></a></article>
                            <article class="vide col-4"></article>
                            <article class="vide col-4"></article>
                        </div>

                        <div class="l1 row borderB">
                            <article class="t col-4"><a href="?name=et#upOne"><p>Étude énergétique<br> RE2020</p></a></article>
                            <article class="vide col-4"></article>
                            <article class="content t col-4"><a href="?name=moe1#downOne"><p>MOE<br>
                                Maîtrise d'œuvre d'exécution</p></a></article>
                        </div>
                        <div class="l1 row">
                            <article class="t col-12"><a href="?name=amo1#downOne"><p>AMO<br>
                                Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>


                    </div>

                    <div class="row up" id="upOne">

                        <div class="col-4" style="padding-left: 10%;"><i class="fas my first"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse</div>
                        <div class="col-4" style="padding-left: 5%;"><i class="fas my"><img src="assets/picto/idee.png"></i> Conception</div>
                        <div class="col-4" style="padding-left: 3%"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux</div>

                    </div>
                </section>
                <section class="mobile">

                    <div class="text-center" style="padding-left: 10%;"><i class="fas my first"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse</div>
                    <div class="back">
<p>test</p>
                    </div>

                </section>

                <style>

                    .back {

                        position: relative;
                        background-color: #C8F9C4;
                    }

                    .back:before{
                        content : '';
                        position: absolute;
                        right: -100px;
                        border-style: solid;
                        border-width: 100px 100px 0 101px;
                        border-color: var(--color-back-table) transparent transparent transparent ;
                    }


                    .text-center i.my img.reno{
                        width: 26px;
                    }
                    .text-center i.my img{
                        width: 23px;
                    }

                    @media (max-width: 995px) {
                        .content a p br{
                            display: none;
                        }
                    }

                    @media (max-width: 875px) {
                        br.br875{
                            display: none;
                        }
                    }











                </style>

                <br><br>
                <h2 style="margin-left: 6%;">Pour plus d'informations : </h2> <br>
                <div class="row rowblock">

                    <div class="col-6">
                        <div class="divOne" style="min-height: unset;">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "ac" ){ ?>
                                <div class="bold otitle" id="c1" style="    border-radius: 6px; margin-bottom: unset; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);">
                            <?php } else {?>
                                <div class="bold otitle" id="c1" style="margin-bottom: unset">
                            <?php } ?>
                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Accompagnement à l’auto-construction </div>
                        </div>
                    </div>
                    <div id="downOne"></div>
                    <div class="col-6">

                        <div class="divOne" style="min-height: unset;">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "et" ){ ?>
                                <div class="bold otitle" id="c2" style="    border-radius: 6px; margin-bottom: unset; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);">
                            <?php } else {?>
                                <div class="bold otitle" id="c2" style="margin-bottom: unset">
                            <?php } ?>
                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Étude énergétique RE2020 </div>
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "amo1" ){ ?>
                                <div class="bold otitle" id="c3" style="    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                            <?php } else {?>
                                <div class="bold otitle" id="c3" >
                            <?php } ?>


                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <i class="fas my"><img src="assets/picto/idee.png"></i> <i class="fas my"> <img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable </div>
                            <p class="divP"> il s’agit d’une mission de
                            <b class="bold">conseil</b> et de proposition vis-à-vis du maître d’ouvrage (vous, le client!) Notre objectif
                            est de suivre votre projet et de vous aider, de vous conseiller à prendre les
                            meilleures décisions pour votre projet. Et in fine, assurer un meilleur déroulement du
                                chantier ! Attention, l’AMO ne fait que conseiller. Il ne décide de rien ! </p>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "moe1" ){ ?>
                            <div class="bold otitle" id="c4" style="    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="c4" >
                                    <?php } ?>


                                    <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> MOE <br> Maîtrise d'œuvre d'exécution </div>
                            <p class="divP" style="margin-top: 11%"> Cette mission concerne la coordination de la
                                mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                                expert suivra le bon déroulement du chantier de A à Z. Ici effectivement, nous
                                sommes décisionnaires ! </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="contenu <?php if ($off == 1){
            echo "actif";
        } ?>">
            <div class="container containerstop">


                <div class="titlediv">
                    <h1 class="titleoffre uppercase" style="text-align: center">Rénovation</h1>
                </div>

                <p class="container text-center">Restaurer, c'est être responsable. Pensons ensemble à la préservation<br>
                    des matériaux en élaborant votre projet</p>

                <br>
                <section class="desktop">
                    <div id="shema">


                        <div class="l1 row borderB">
                            <article class="t col-4"><a href="?off=1&name=ae#upTwo"><p>Audit <br>énergétique</p></a></article>
                            <article class="vide col-4"></article>
                            <article class="vide col-4"></article>
                        </div>

                        <div class="l1 row borderB">
                            <article class="t col-4"><a href="?off=1&name=dt#upTwo"><p>Diagnostic<br>technique</p></a></article>
                            <article class="vide col-4"></article>
                            <article class="content t col-4"><a href="?off=1&name=moe2#downTwo"><p>MOE<br>
                                        Maîtrise d'œuvre d'exécution</p></a></article>
                        </div>
                        <div class="l1 row">
                            <article class="t col-12"><a href="?off=1&name=amo2#downTwo"><p>AMO<br>
                                        Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>


                    </div>

                    <div class="row up" id="upTwo">

                        <div class="col-4" style="padding-left: 10%;"><i class="fas my first"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse</div>
                        <div class="col-4" style="padding-left: 5%;"><i class="fas my"><img src="assets/picto/idee.png"></i> Conception</div>
                        <div class="col-4" style="padding-left: 3%"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux</div>

                    </div>
                </section>
                <section class="mobile">

                    <!--Mobile-->

                </section>

                <br><br>
                <h2 style="margin-left: 6%;">Pour plus d'informations : </h2> <br>
                <div class="row rowblock">


                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>
                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "dt" ){ ?>
                            <div class="bold otitle" id="r1" style="    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="r1" >
                                    <?php } ?><i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> DDT <br> Diagnostic technique </div>
                            <p class="divP" style="margin-top: 11%">Nous vous fournissons un rapport contenant tous les
                                diagnostics immobiliers obligatoires concernant la sécurité des futurs occupants du
                                bâtiment (exposition au plomb, présence d’amiante...) La santé avant tout ! </p>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>
                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "ae" ){ ?>
                            <div class="bold otitle" id="r2" style=" padding: 32px 20px;    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="r2" style="  padding: 32px 20px;">
                                    <?php } ?><i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Audit énergétique </div>
                            <p class="divP" style="margin-top: 6.5%;"> Nous faisons un “état des lieux” des performances énergétiques
                                de votre bien. Nous examinons le chauffage, l’isolation, la ventilation, etc. afin de
                                déterminer les points faibles et de construire le meilleur plan d’action pour que votre
                                bien devienne pauvre en consommation et plus responsable ! </p>
                        </div>
                    </div>

                    <div id="downTwo"></div>
                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>
                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "amo2" ){ ?>
                            <div class="bold otitle" id="r3" style="    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="r3" >
                                    <?php } ?> <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <i class="fas my"><img src="assets/picto/idee.png"></i> <i class="fas my"> <img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable </div>
                            <p class="divP"> il s’agit d’une mission de
                                <b class="bold">conseil</b> et de proposition vis-à-vis du maître d’ouvrage (vous, le client!) Notre objectif
                                est de suivre votre projet et de vous aider, de vous conseiller à prendre les
                                meilleures décisions pour votre projet. Et in fine, assurer un meilleur déroulement du
                                chantier ! Attention, l’AMO ne fait que conseiller. Il ne décide de rien ! </p>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "moe2" ){ ?>
                            <div class="bold otitle" id="r4" style="    border-radius: 6px; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="r4" >
                                    <?php } ?>


                                    <i class="fas my"> <img class="reno" src="assets/picto/renovation2.png"></i> <br> MOE <br> Maîtrise d'œuvre d'exécution </div>
                            <p class="divP" style="
    margin-top: 11%;"> Cette mission concerne la coordination de la
                                mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                                expert suivra le bon déroulement du chantier de A à Z. Ici effectivement, nous
                                sommes décisionnaires ! </p>
                        </div>
                    </div>

                </div>

            </div>

        </article>
        </div>
    </div>
        </div>
    </section>

    <script src="javascript/offre.js"></script>


</main>



<?php footer($page); ?></body> </html>