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
                        <li class="onglet" style=""><i class="fas fa-home"></i> CONSTRUCTION</li>
                        <li class="onglet actif" style="">
                            <i class="fas fa-tools"></i> RÉNOVATION</li>
                    </ul>

                <?php } else { ?>
                    <ul>
                        <li class="onglet actif" style="">
                            <i class="fas fa-home"></i> CONSTRUCTION</li>
                        <li class="onglet" style="">
                            <i class="fas fa-tools"></i> RÉNOVATION</li>
                    </ul>

                    <?php }
            } else { ?>
                <ul>
                    <li class="onglet actif" style="">
                        <i class="fas fa-home"></i> CONSTRUCTION</li>
                    <li class="onglet" style="">
                        <i class="fas fa-tools"></i> RÉNOVATION</li>
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
                            <article class="t col-4"><a href="?name=ac#upOne"><p>Accompagnement à<br> la conception</p></a></article>
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

                    <div class="text-center"><i class="fas my first"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse</div>
                    <div id="shemaM"  class="shema1">

                        <div class="l1 row borderB">
                            <article class="t col-12"><a href="?name=ac#acMobile"><p>Accompagnement à<br> la conception</p></a></article>
                        </div>
                        <div class="l1 row borderB">
                            <article class="t col-12"><a href="?name=et#etMobile"><p>Étude énergétique<br> RE2020</p></a></article>
                        </div>
                        <div class="l1 row">
                            <article class="t col-12"><a href="?name=amo1#amoMobile"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>

                    <div class="text-center titleMo"><i class="fas my"><img src="assets/picto/idee.png"></i> Conception</div>
                    <div id="shemaM" class="shema2">

                        <div class="l1 row" style="height: unset;">
                            <article class="t col-12"><a href="?name=amo1#amoMobile"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>

                    <div class="text-center titleMo"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux</div>
                    <div id="shemaM" class="shema3" style="height: 134px;">

                        <div class="l1 row borderB" style="height: 50%;">
                            <article class="t col-12"><a href="?name=moe1#moeMobile"><p>MOE<br class="a393"> Maîtrise d'œuvre d'exécution</p></a></article>
                        </div>
                        <div class="l1 row" style="height: 50%;">
                            <article class="t col-12"><a href="?name=amo1#amoMobile"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>
                </section>

                <style>

                    .shema1{
                        height: 201px;
                    }

                    .shema1:before{
                        border-bottom: 100px solid transparent;
                        border-top: 100px solid transparent;
                        right: -51px;
                        border-left: 5.1rem solid var(--color-back-table);
                    }

                    .shema2{
                        height: 67px;
                    }

                    .shema2:before{
                        border-bottom: 34px solid transparent;
                        border-top: 33px solid transparent;
                        right: -41px;
                        border-left: 4.1rem solid var(--color-back-table);
                    }

                    .shema3{
                        height: 135px;
                    }

                    .shema3:before{
                        border-bottom: 67px solid transparent;
                        border-top: 68px solid transparent;
                        right: -51px;
                        border-left: 5.1rem solid var(--color-back-table);
                    }
                </style>

                <div id="acMobile"></div>

                <br><br>
                <h2 style="margin-left: 6%;">Pour plus d'informations : </h2> <br>
                <div class="row rowblock">

                    <div class="col-6">
                        <div class="divOne" style="min-height: 639px;">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "ac" ){ ?>
                                <div class="bold otitle" id="c1" style="    border-radius: 6px; margin-bottom: unset; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);">
                            <?php } else {?>
                                <div class="bold otitle" id="c1" style="margin-bottom: unset">
                            <?php } ?>
                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Accompagnement à la conception </div>


                                    <p class="divP" style="
                                        max-width: 95%;
                                        text-align: center;
                                        margin-left: 2.5%;
                                        margin-bottom: 20px;
                                        margin-top: 10px;">

                                        La conception d’un projet immobilier est LE moment le plus intéressant pour réfléchir de
                                        manière global. Nous vous accompagnons pour poser sur la feuille blanche votre rêve de
                                        manière éveillé.
                                        <br><br>
                                        Choix des matériaux, positions des ouvertures, emplacements des équipements, systèmes
                                        énergétiques... sont autant de points à soigner par une connaissance total des impacts.
                                        Notre expertise vous permettra d’avoir une sérénité total lors de ces réflexions pour garantir
                                        à votre projet :<br><br>
                                        - un cout maitriser à la construction, et pendant son exploitation (consommations)<br>
                                        - un confort d’utilisation et une qualité de l’air maximum<br>
                                        - un impact environnemental réduit par l’orientation des choix les plus vertueux<br><b id="etMobile"></b>
                                        <br>
                                        Si vous ne le faite pas maintenant...
                                    </p>


                                </div>
                    </div>
                    <div class="col-6">

                        <div class="divOne" style="min-height: 639px;">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "et" ){ ?>
                                <div class="bold otitle" id="c2" style="    border-radius: 6px; margin-bottom: unset; background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);">
                            <?php } else {?>
                                <div class="bold otitle" id="c2" style="margin-bottom: unset">
                            <?php } ?>
                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Étude énergétique RE2020 </div>


                                    <p class="divP" style="
                                        text-align: center;
                                        margin-bottom: 20px;
                                        margin-top: 8%;">

                                        Depuis le 01/01/2022, l’ensemble des logements neufs est soumis à une nouvelle
                                        règlementation thermique et environnementale. La RE2020 pousse le Maitre d’ouvrage à
                                        analyser de manière règlementaire :<br>
                                        <br>
                                        - Le cycle de vie du projet (choix de matériaux plus vertueux)<br>
                                        - L’isolation thermique amélioré<br>
                                        - Le confort d’été (risque de surchauffe dans le logement) est pris en compte<br>
                                        <br><b id="downOne"></b><b id="amoMobile"></b>
                                        Nous vous aidons à trouver les compositions les plus judicieuses pour répondre à cette
                                        exigence et faciliter l’obtention de votre permis de construire.
                                    </p>


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
                            vous donner les outils pour anticiper de manière méthodique votre projet. <b id="moeMobile"></b> Et in fine, assurer un meilleur déroulement du
                                chantier ! Attention, l’AMO ne fait que conseiller. vous restez pilote de votre projet, mais avec un
                                professionnel à vos côtés </p>
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
                            <p class="divP" style="margin-top: 9%"> Cette mission concerne la coordination de la
                                mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                                expert suivra le bon déroulement du chantier de A à Z. Vous pourrez vous appuyer sur nous pour gérer l’ensemble du déroulement de votre
                                chantier. </p>
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

                    <div class="text-center"><i class="fas my first"><img src="assets/picto/lanalyse-des-donnees.png"></i> Analyse</div>
                    <div id="shemaM"  class="shema1">

                        <div class="l1 row borderB">
                            <article class="t col-12"><a href="?off=1&name=ae#aeMobile"><p>Audit<br> énergétique</p></a></article>
                        </div>
                        <div class="l1 row borderB">
                            <article class="t col-12"><a href="?off=1&name=dt#dtMobile"><p>Diagnostic<br> technique</p></a></article>
                        </div>
                        <div class="l1 row">
                            <article class="t col-12"><a href="?off=1&name=amo2#amoMobile2"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>

                    <div class="text-center titleMo"><i class="fas my"><img src="assets/picto/idee.png"></i> Conception</div>
                    <div id="shemaM" class="shema2">

                        <div class="l1 row" style="height: unset;">
                            <article class="t col-12"><a href="?off=1&name=amo2#amoMobile2"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>

                    <div class="text-center titleMo"><i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> Travaux</div>
                    <div id="shemaM" class="shema3" style="height: 134px;">

                        <div class="l1 row borderB" style="height: 50%;">
                            <article class="t col-12"><a href="?off=1&name=moe2#moeMobile2"><p>MOE<br class="a393"> Maîtrise d'œuvre d'exécution</p></a></article>
                        </div>
                        <div class="l1 row" style="height: 50%;">
                            <article class="t col-12"><a href="?off=1&name=amo2#amoMobile2"><p>AMO<br class="a533"> Assistance maîtrise d’ouvrage responsable</p></a></article>
                        </div>

                    </div>
                </section>

                <div id="dtMobile"></div>
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
                                diagnostics immobiliers obligatoires concernant la sécurité des futurs<b id="aeMobile"></b> occupants du
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
                                déterminer les points faibles et de construire le meilleur<b id="amoMobile2"></b> plan d’action pour que votre
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
                                    vous donner les outils pour anticiper de manière méthodique votre projet. <b id="moeMobile2"></b> Et in fine, assurer un meilleur déroulement du
                                    chantier ! Attention, l’AMO ne fait que conseiller. vous restez pilote de votre projet, mais avec un
                                    professionnel à vos côtés </p>
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
                                <p class="divP" style="margin-top: 9%"> Cette mission concerne la coordination de la
                                    mise en place des travaux. Ici nous <b class="bold">concevons</b> le projet. Par la suite, notre oeil
                                    expert suivra le bon déroulement du chantier de A à Z. Vous pourrez vous appuyer sur nous pour gérer l’ensemble du déroulement de votre
                                    chantier. </p>
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



<?php
require "db/function.php"; footer($page); ?></body> </html>