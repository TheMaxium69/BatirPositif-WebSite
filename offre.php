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
                    <h1 class="titleoffre uppercase" style="text-align: center">Construction</h1>
                </div>



                <div id="shema">


                    <div class="l1 row">
                        <article class="t col-4"><p>Accompagnement à<br> l’auto-construction</p></article>
                        <article class="vide col-4"></article>
                        <article class="vide col-4"></article>
                    </div>

                    <div class="l1 row">
                        <article class="t col-4"><p>Étude énergétique<br> RE2020</p></article>
                        <article class="vide col-4"></article>
                        <article class="t col-4"><p>MOE<br>
                            Maîtrise d'œuvre d'exécution</p></article>
                    </div>
                    <div class="l1 row">
                        <article class="t col-12"><p>AMO<br>
                            Assistance maîtrise d’ouvrage responsable</p></article>
                    </div>


                </div>


                <style>
                    :root {
                        --color-back-table: #c8f9c4;
                    }

                    div.l1{
                        width: 100%;
                        height: 33.333333%;
                        text-align: center;
                        margin-right: unset;
                        margin-left: unset;

                        background: linear-gradient(90deg, #28A745 0%, #36dc24 100%);
                    }
                    article.vide{
                        background: var(--color-back-table);
                    }

                    article.t{
                        color: white;
                    }

                    #shema p{
                        padding-top: 6px;
                    }

                    #shema p:hover{
                        -webkit-transform: scale(1.1);
                        -moz-transform: scale(1.1);
                        -ms-transform: scale(1.1);
                        -o-transform: scale(1.1);
                        transform: scale(1.1);
                    }

                    div#shema {
                        position: relative;
                        /*top: 10px;
                        left: 110px;*/
                        width: 90%;
                        height: 201px;
                        background: var(--color-back-table);
                        /*border: solid green;*/
                    }

                    div#shema:before {
                        content : '';
                        position: absolute;
                        right: -100px;
                        border-style: solid;
                        border-width: 121px 0 121px 100px;
                        border-color: transparent
                        transparent transparent var(--color-back-table);
                    }

                    .timeline{
                        margin-top: -20px;
                        width: 90%;
                    }



                </style>




                <div class="timeline">
                    <div class="content">
                        <div id="a1" onclick="shemat(1)" class="current"><i class="fas fa-search"></i> Analyse</div>
                        <div id="a2" onclick="shemat(2)" class=""><i class="fas fa-ruler-combined"></i> Conception</div>
                        <div id="a3" onclick="shemat(3)" class=""><i class="fas fa-puzzle-piece"></i> Travaux</div>
                    </div>
                </div>

                <br><br>
                <h2 style="margin-left: 6%;">Pour plus d'informations : </h2> <br>
                <div class="row rowblock">

                    <div class="col-6">
                        <div class="divOne" style="min-height: unset;">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="c1" style="margin-bottom: unset"> <i class="fas fa-search"></i> <br> Accompagnement à l’auto-construction </div>
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="divOne" style="min-height: unset;">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="c2" style="margin-bottom: unset"> <i class="fas fa-search"></i> <br> Étude énergétique RE2020 </div>
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="c3"><i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas fa-puzzle-piece"></i> <br> AMO <br> Assistance maîtrise d’ouvrage responsable </div>
                            <p style="text-align: center; margin-bottom: 0">|</p><p class="divP"> il s’agit d’une mission de
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

                            <div class="bold otitle" id="c4"> <i class="fas fa-puzzle-piece"></i> <br> MOE <br> Maîtrise d'œuvre d'exécution </div>
                            <p style="text-align: center; margin-bottom: 0; margin-top: 9%;">|</p><p class="divP"> Cette mission concerne la coordination de la
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


                <div class="timeline">
                    <div class="content">
                        <div id="b1" onclick="shemat(1)" class="current"><i class="fas fa-search"></i> Analyse</div>
                        <div id="b2" onclick="shemat(2)" class=""><i class="fas fa-ruler-combined"></i> Conception</div>
                        <div id="b3" onclick="shemat(3)" class=""><i class="fas fa-puzzle-piece"></i> Travaux</div>
                    </div>
                </div>
                <br><br>
                <h2 style="margin-left: 6%;">Pour plus d'informations : </h2> <br>
                <div class="row rowblock">


                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="r1"><i class="fas fa-search"></i> <hr style="background: white;"> DDT <br> Diagnostic technique </div>
                            <p style="text-align: center; margin-bottom: 0; margin-top: 10%;">|</p><p class="divP">Nous vous fournissons un rapport contenant tous les
                                diagnostics immobiliers obligatoires concernant la sécurité des futurs occupants du
                                bâtiment (exposition au plomb, présence d’amiante...) La santé avant tout ! </p>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="r2" style="  padding: 32px 20px;"><i class="fas fa-search"></i> <hr style="background: white;"> Audit énergétique </div>
                            <p style="text-align: center; margin-bottom: 0; margin-top: 4%;">|</p><p class="divP"> Nous faisons un “état des lieux” des performances énergétiques
                                de votre bien. Nous examinons le chauffage, l’isolation, la ventilation, etc. afin de
                                déterminer les points faibles et de construire le meilleur plan d’action pour que votre
                                bien devienne pauvre en consommation et plus responsable ! </p>
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="divOne">

                            <div class="divTwo">
                            </div>

                            <div class="bold otitle" id="r3"> <i class="fas fa-search"></i> <i class="fas fa-ruler-combined"></i> <i class="fas fa-puzzle-piece"></i> <hr style="background: white;"> AMO <br> Assistance maîtrise d’ouvrage responsable </div>
                            <p style="text-align: center; margin-bottom: 0">|</p><p class="divP"> il s’agit d’une mission de
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

                            <div class="bold otitle" id="r4"> <i class="fas fa-puzzle-piece"></i> <hr style="background: white;"> MOE <br> Maîtrise d'œuvre d'exécution </div>
                            <p style="text-align: center; margin-bottom: 0; margin-top: 9%;">|</p><p class="divP"> Cette mission concerne la coordination de la
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