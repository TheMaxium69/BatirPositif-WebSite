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
                            <li class="onglet">
                                <i class="fas fa-home"></i> CONSTRUCTION</li>
                            <li class="onglet actif">
                                <i class="fas fa-tools"></i> RÉNOVATION</li>
                            <!-- <li class="onglet">
                                <i class="fas fa-scroll"></i> DÉCRET TERTIAIRE</li> -->
                        </ul>

                <?php } else if (2 == $off){ ?>

                    <ul>
                        <li class="onglet">
                            <i class="fas fa-home"></i> CONSTRUCTION</li>
                        <li class="onglet">
                            <i class="fas fa-tools"></i> RÉNOVATION</li>
                        <!-- <li class="onglet actif">
                            <i class="fas fa-scroll"></i> DÉCRET TERTIAIRE</li> -->
                    </ul>

                <?php } else { ?>
                        <ul>
                            <li class="onglet actif">
                                <i class="fas fa-home"></i> CONSTRUCTION</li>
                            <li class="onglet">
                                <i class="fas fa-tools"></i> RÉNOVATION</li>
                            <!-- <li class="onglet">
                                <i class="fas fa-scroll"></i> DÉCRET TERTIAIRE</li> -->
                        </ul>

                    <?php }
            } else { ?>
                <ul>
                    <li class="onglet actif">
                        <i class="fas fa-home"></i> CONSTRUCTION</li>
                    <li class="onglet">
                        <i class="fas fa-tools"></i> RÉNOVATION</li>
                    <!-- <li class="onglet">
                        <i class="fas fa-scroll"></i> DÉCRET TERTIAIRE</li> -->
                </ul>
            <?php } ?>
        </nav>

    <div class="divGlobal">
        <div  class="container containerstop">
        <!-- Les contenus -->
        <article class="contenu <?php if ($off != 1 && $off != 2){
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
                        <div class="divOne" style="min-height: 490px;">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "ac" ){ ?>
                                <div class="bold otitle" id="c1" style="    border-radius: 6px; margin-bottom: unset; background: var(--colorall-green-1);">
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

                                        La conception d’un projet immobilier est un moment important pour poser vos envies et
                                        besoins en fonction de votre mode de vie, et aussi les contraintes économiques, techniques,
                                        réglementaires, etc. Nous vous accompagnons pour cadrer le projet, le suivre à vos côtés,
                                        afin de passer de l'idée à la réalité, de manière sereine. Notre pratique vous permet de vous
                                        projeter à chaque étape pour prendre les meilleures décisions (programmation, maîtrise des
                                        usages, planification, budgétisation, dépôt de plan, terrassement...) cette expertise garantira
                                        à votre projet : un coût maîtrisé, un meilleur confort de vie & un impact environnemental
                                        positif.<b id="etMobile"></b>

                                    </p>


                                </div>
                    </div>
                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "et" ){ ?>
                                <div class="bold otitle" id="c2" style="    border-radius: 6px; margin-bottom: unset; background: var(--colorall-green-1);">
                            <?php } else {?>
                                <div class="bold otitle" id="c2" style="margin-bottom: unset">
                            <?php } ?>
                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <br> Étude énergétique RE2020 </div>


                                    <p class="divP" style=" margin-bottom: 10px;">

                                        Depuis le 1er janvier 2022, l’ensemble des logements neufs est soumis à une nouvelle
                                        réglementation thermique et environnementale. La RE 2020 pousse le maître d’ouvrage à
                                        analyser de manière réglementaire : <b class="bold">le cycle de vie du projet</b> (choix de matériaux plus
                                        vertueux), ou encore <b class="bold">l’isolation thermique améliorée</b> ou encore <b class="bold">le confort d’été</b>. Notre
                                        maîtrise<b id="downOne"></b><b id="amoMobile"></b> de la réglementation vous permettra de vous lancer de manière sereine dans un
                                        projet conforme et efficace. (facilité du permis de construire, respect du PLU, RE 2020
                                        intégré...)
                                    </p>


                                </div>
                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <?php if (!empty($_GET['name'])  && $_GET['name'] == "amo1" ){ ?>
                                <div class="bold otitle" id="c3" style="    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                            <?php } else {?>
                                <div class="bold otitle" id="c3" >
                            <?php } ?>


                                    <i class="fas my"><img src="assets/picto/lanalyse-des-donnees.png"></i> <i class="fas my"><img src="assets/picto/idee.png"></i> <i class="fas my"> <img class="reno" src="assets/picto/renovation2.png"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable </div>
                            <p class="divP" style="margin-top: 42px;margin-bottom: 42px;"> il s’agit d’une mission de
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
                            <div class="bold otitle" id="c4" style="    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
                                <?php } else {?>
                                <div class="bold otitle" id="c4" >
                                    <?php } ?>


                                    <i class="fas my"><img class="reno" src="assets/picto/renovation2.png"></i> <br> MOE <br> Maîtrise d'œuvre d'exécution </div>
                            <p class="divP" style="margin-top: 0; margin-bottom: 0;">Cette mission concerne la coordination de la mise en place des travaux. Ici nous concevons
le projet. Par la suite, notre oeil expert suivra la bonne réalisation du chantier de A à Z et la
réception de votre habitation dans les temps tout en préservant la qualité des relations. Vous
pourrez vous appuyer sur nous pour gérer l’ensemble du déroulement de votre chantier.
(définition des objectifs, planification, budgétisation, formation, etc)</p>
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
                            <div class="bold otitle" id="r1" style="    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
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
                            <div class="bold otitle" id="r2" style=" padding: 32px 20px;    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
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
                            <div class="bold otitle" id="r3" style="    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
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
                            <div class="bold otitle" id="r4" style="    border-radius: 6px; background: var(--colorall-green-1);border-top-left-radius: 7px; border-top-right-radius: 7px;">
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


        <article class="contenu <?php if ($off == 2){
            echo "actif";
        } ?>">
            <div class="container containerstop">


                <div class="titlediv">
                    <h1 class="titleoffre uppercase" style="text-align: center">DÉCRET TERTIAIRE</h1>
                </div>

                <div class="dt-head row">

                    <div class="col">
                        <img src="assets/dt.png">
                    </div>

                    <div class="col">
                        <h3>BÂTIR POSITIF ACCOMPAGNE LES PROJETS DE BÂTIMENT TERTIAIRE</h3>
                        <p>

                        Le secteur du bâtiment représente 43 % des consommations énergétiques annuelles
                        françaises et il génère 23 % des émissions de gaz à effet de serre français .

                        </p>
                    </div>


                </div>

                <div class="dt-ico row">

                    <div class="col-2">
                        <img src="assets/dt.png">
                        
                        <img src="assets/dt.png">
                    </div>

                    <div class="col-8">
                        <p>
                            
                        

                        </p>
                    </div>


                </div>





        </article>
        </div>
    </div>
        </div>
    </section>

    <!-- <section id="offre-part">

        <div class="container">

            <h2>PARTENAIRES</h2>

            <h4>AGENCES DE L'ÉTAT & REGLEMENTATION</h4>

            <img src="assets/part/a1.png" alt="a1">
            <img src="assets/part/a2.png" alt="a2">
            <img src="assets/part/a3.png" alt="a3">
            <img src="assets/part/a4.png" alt="a4">
            <img src="assets/part/a5.png" alt="a5">

            <h4>RÉSEAUX D'EXPERTS ET FACILITATEURS</h4>

            <img src="assets/part/b1.png" alt="b1">
            <img src="assets/part/b2.png" alt="b2">
            <img src="assets/part/b3.png" alt="b3">
            <img src="assets/part/b4.png" alt="b4">

            <h4>NOS AUTRES PARTENAIRES</h4>

            <img src="assets/part/c1.png" alt="c1">
        </div>

    </section>


    <style>

        #offre-part{
            padding: 30px;
        }

        #offre-part h2{
            font-weight: bold;
            color: var(--colorall-gray-1);
            margin: 25px 0px;
        }

        #offre-part h4{
            font-weight: bold;
            color: var(--colorall-green-1);
            margin: 22px 0px;
        }


    </style> -->

    <script src="javascript/offre.js"></script>


</main>



<?php
require "db/function.php"; footer($page); ?></body> </html>