<?php include "app/app.php"; $page = 3; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="about-story">
        <div class="back">
            <div class="text">

                <hr>

                <h3>

                    Un projet plus responsable,
                    pour un futur plus serein!

                </h3>

                <p>

                    Bâtir positif est engagé dans l'innovation énergétique et durable, pour des
                    conceptions plus écologiques, grâce à des matériaux biosourcés.
                    Notre objectif est de vous accompagner et d'être un réel soutien lors des
                    différentes étapes de votre projet.

                </p>

                <h4 class="soustext">

                    DE L'EFFICACITÉ À L'ÉPANOUISSEMENT
                </h4>


                <h5>

                    Les piliers d'un projet réussi

                </h5>


                <style>
                    div.text h3 {
                        color: green;
                    }
                    div.text h4.soustext{
                        margin: 25px 30px 7px;
                    }
                    div.text h4 {
                        color: green;
                        font-size: 22px;
                        margin: 25px 30px;
                    }

                    div.text h5 {
                        font-size: 15px;
                        margin-left: 30px;
                        margin-bottom: 25px;
                        font-style: italic;
                    }

                </style>

                <div id="ee" class="row">

                    <div class="col-6"><p><img src="assets/histoire/2.png"> Innovation & dynamisme</p></div>
                    <div class="col-6"><p><img src="assets/histoire/4 (1).png"> Vision globale</p></div>
                    <div class="col-6"><p><img src="assets/histoire/3 (1).png"> Écoute & bienveillance</p></div>
                    <div class="col-6"><p><img src="assets/histoire/5 (1).png"> Engagement & sécurité</p></div>

                </div>
                <style>

                    #ee img{
                        margin-right: 20px;
                        width: 70px;
                        height: 70px;
                    }

                    #ee img:hover{
                        -webkit-transform:scale(1.25); /* Safari et Chrome */
                        -moz-transform:scale(1.25); /* Firefox */
                        -ms-transform:scale(1.25); /* Internet Explorer 9 */
                        -o-transform:scale(1.25); /* Opera */
                        transform:scale(1.25);
                    }
                    @media (max-width: 780px) {
                        #ee div.col-6{
                            flex: unset;
                            max-width: unset;
                        }
                    }

                </style>

                <h4>
                    DES CHOIX RESPONSABLES
                </h4>

                <div id="cr" class="row">

                    <div class="col-4"><p>MATÉRIAUX<br>
                            BIO-SOURCÉS</p></div>

                    <div class="col-4"><p>OPTIMISATION
                            DES RESSOURCES</p></div>

                    <div class="col-4"><p>HABITAT SAIN,
                            PERFORMANT, DURABLE</p></div>

                </div>

                <style>

                    #cr{
                        color: white;
                        text-transform: uppercase;
                        font-weight: bold;
                        background-color: #7fbf7f;
                        text-align: center;
                        padding: 22px 0 12px 0px;

                        border-radius: 30px;
                        margin-bottom: 10px;
                    }

                    @media (max-width: 463px) {
                        #cr .col-4{
                            flex: unset;
                            max-width: unset;
                        }
                    }
                </style>

                <div id="mt" class="row">

                    <div class="col-4"><p><img src="assets/histoire/3.png"> <j>Le bois, la paille, le chanvre,
                            etc. sont des matériaux
                            locaux, renouvelables,
                            recyclables.</j></p></div>
                    <img class="icon1" src="assets/151861.png">

                    <div class="col-4"><p><img src="assets/histoire/4.png"> <j>Un bâtiment bien
                                étudié minimisera les
                                consommations
                                énergétiques.</j></p></div>

                    <img class="icon2" src="assets/56751.png">
                    <div class="col-4"><p><img src="assets/histoire/5.png"> <j>Le résultat : un habitat
                                économe et confortable,
                                qui préservera votre santé
                                et l'environnement !</j></p></div>

                </div>

                <style>

                    #mt .col-4{
                        margin-top: 20px;
                    }

                    #mt .col-4 p{
                        font-size: 11px;
                        color: green;
                        text-align: center;
                    }

                    #mt j{
                         max-width: 80%;
                         display: flex;

                         margin-left: 10%;
                         margin-right: 10%;

                    }
                    #mt img.icon1, #mt img.icon2{
                        position: absolute;
                        width: 60px;
                        color: green;
                        margin-top: 8%;
                    }
                    
                    @media (max-width: 825px) {
                        #mt img.icon1, #mt img.icon2{
                            display: none;
                        }
                    }

                    #mt img.icon1{
                        margin-left: 24%;
                    }

                    #mt img.icon2{
                        margin-left: 51%;
                    }

                    #mt .col-4 img{
                        border-radius: 50%;
                        margin-left: auto;
                        margin-right: auto;
                        width: 67%;
                        height: 67%;
                        margin-bottom: 10px;

                    }

                    #mt img:hover{
                        -webkit-transform:scale(1.15); /* Safari et Chrome */
                        -moz-transform:scale(1.15); /* Firefox */
                        -ms-transform:scale(1.15); /* Internet Explorer 9 */
                        -o-transform:scale(1.15); /* Opera */
                        transform:scale(1.15);
                    }
                    @media (max-width: 463px) {
                        #mt .col-4{
                            flex: unset;
                            max-width: unset;
                        }

                        #mt .col-4 p{
                            font-size: 15px;
                        }
                    }



                </style>

                <br>
                <p class="final">
                    Notre expérience sur le terrain permettra une bonne coordination de votre projet, tout en
                    respectant les exigences de performances énergétiques, et ainsi la dimension
                    environnementale. Que vous soyez un particulier, un professionnel, ou une collectivité,

                    nous pouvons vous accompagner
                </p>

                <style>

                    #about-story .final{
                        background: #5ba75a;
                        color: white;
                        padding: 30px;

                    }

                </style>



                <!--<h3>
                    Notre Histoire !
                </h3>

                <p>
                    L’histoire de Bâtir positif démarre en 2013 avec une seule personne à bord, Habib Boubia le
                    fondateur. Il décide...
                </p>
                <h3>
                    Nos Valeur !
                </h3>
                <p>
                    De toute cette histoire (et finalement du personnage principal) découle des valeurs
                    évidentes chez Bâtir positif. Dans notre entreprise, le maître mot est la <b class="uppercase">bienveillance</b>. Et pour
                    se faire, il est nécessaire d’avoir de bons échanges (tant avec nos clients, partenaires, qu’en
                    équipe!) Comprendre l’autre et faire preuve d’empathie est une réelle main tendue pour
                    <b class="bold">avancer ensemble !</b> Nous sommes évidemment très sensibles à la question écologique et
                    à toutes les manières possibles de préserver le monde qui nous accueille! À petite, comme
                    à grande échelle. Finalement, nous nous voulons très accessibles. Notre entreprise est à
                    taille humaine, et notre ouverture d’esprit permet de tisser des liens forts de confiance avec
                    nos partenaires et nos clients.
                </p>-->

            </div>
        </div>

    </section>

    <section id="about-staff">
        <div class="title container">

            <h3>L'équipe</h3>

        </div>


        <div class="about__section">

                <a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>1.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Habib BOUBIA</h4>
                        <h5 class="title">Fondateur, directeur</h5>
                    </div>

                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>2.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Quentin <j class="uppercase"> Claudel</j></h4>
                        <h5 class="title">Chargé d’affaire Economie de la construction</h5>
                    </div>

                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>3.png');"></div>

                    <div class="about__info">
                        <h4 class="name">Youcef <j class="uppercase">Messalti</j></h4>
                        <h5 class="title">Chargé d’affaires-Optimisation énergétique</h5>
                    </div>


                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>4.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Elisabeth <j class="uppercase">Merenna</j></h4>
                        <h5 class="title">Responsable communication</h5>
                    </div>

                </div></a>


        </div>


    </section>

    <?php

    require "db/function.php";

    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "galery"){ $isGalery = $EnvSection; }
    }

    if ($isGalery['content'] == "true"){ ?>

        <section id="about-galery">

            <div class="title container">

                <hr>
                <h3>Galerie des projets</h3>

            </div>

            <div class="container-galery py-5">

                <div class="row">

                    <?php

                    $AllGalery = getAllGalery();

                    foreach ($AllGalery as $galery){ ?>

                        <div class="col-4-galery"><div class="galery" style="background-image: url(assets/upload/galery/<?php echo $galery['picture'] ?> );"><?php if ($galery['text'] != null){ echo "<span>" . $galery['text'] ."</span>"; } ?></div></div>

                    <?php } ?>

                </div>

                <style>

                    .col-4-galery{
                        flex: 0 0 33.333333%;
                        max-width: 33.333333%;
                        position: relative;
                        width: 100%;
                        padding-right: 15px;
                        padding-left: 15px;
                    }

                    .container-galery{
                        max-width: 870px;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    @media (max-width: 1052px) {
                        .col-4-galery{
                            flex: 0 0 50%;
                            max-width: 50%;
                        }
                        .container-galery{
                            max-width: 630px;
                        }
                    }

                    @media (max-width: 661px) {
                        .col-4-galery{
                            flex: unset;
                            max-width: unset;
                        }
                        .container-galery{
                            max-width: unset;
                        }
                    }

                    .galery{


                        background-position:0px 0px;
                        background-size: 200px 200px;
                        background-color: #ffffff;

                        width: 200px;
                        height: 200px;
                        margin: 0 auto;
                        border: 5px solid #ffffff;
                        background-color: #ffffff;
                        box-shadow: 1px 1px 3px rgb(0 0 0 / 40%);
                        -webkit-transition: all .4s ease-in;
                        margin-bottom: 55px;
                    }

                    .galery span{
                        opacity: 0;
                        color:#ffffff;

                        background-color: rgba(0,0,0,.3);
                        font-size: 9pt;
                        line-height: 354px;
                        padding:5px;
                        margin-bottom: 10px;
                    }

                    .galery:hover{

                        -webkit-transform: scale(1.5);
                    }

                    .galery:hover span{
                        opacity:1;
                    }

                </style>

            </div>

        </section>

    <?php } ?>

</main>

<?php footer($page); ?></body> </html>