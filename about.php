<?php include "app/app.php"; $page = 3; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="about-story">
        <div class="back">
            <div class="text">

                <hr>
                <h3>
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
                </p>

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


</main>



<?php footer($page); ?></body> </html>