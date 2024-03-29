<?php include "app/app.php"; $page = 6; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="legal-title" class="container" style="padding-bottom: 20px;">
        <h1>
            Mention legals
        </h1>

        <hr>

    </section>

    <?php

    require "db/function.php";

    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "adresse"){ $SectionAdresse = $EnvSection; }
        if ($EnvSection['name'] == "mail"){ $SectionMail = $EnvSection; }
        if ($EnvSection['name'] == "numero"){ $SectionNum = $EnvSection; }
    }

    ?>

    <section id="info">
        <div id="info" class="container" style="text-align: center;">
            <div>
                <h2 style="text-align: center; margin-bottom: 20px; color: #32b618"><i class="fas fa-scroll"></i> Administratif de l'entreprise</h2>
                <p>Copyright © Bâtir Positif. 2023<br> © 2023 Bâtir Positif<br>All Right Reserved © Bâtir Positif</p>
                <p>Fondateur, directeur : Habib Boubia</p>
                <p>Siège Social : <br> <?php echo $SectionAdresse['content'] ?></p>
                <p>Contact : <br> <?php echo $SectionMail['content'] ?> <br> <?php echo $SectionNum['content'] ?></p>
            </div>
            <h2 style="margin-top: 20px; color: #32b618"><i class="fas fa-paperclip"></i> Crédit du site web</h2>
            <div class="row">
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px; color: #32b618">Sources</h3>
                    <p class="no-p">Développement</p>
                    <small>- Tyrolium (© 2017-2023 Tyrolium, Ent.)</small><br>
                    <p class="no-p">Hébergement</p>
                    <small>- OvhCloud (© Copyright 1999-2023 OVHcloud)</small><br>
                    <p class="no-p">Icone Analyse - Page Offre (<a class="link" href="assets/picto/lanalyse-des-donnees.png">Voir</a>)</p>
                    <small>- Kornkum </small><br>
                    <p class="no-p">Icone Conception - Page Offre (<a class="link" href="assets/picto/idee.png">Voir</a>)</p>
                    <small>- Freepik </small><br>
                    <p class="no-p">Icone Travaux - Page Offre (<a class="link" href="assets/picto/renovation2.png">Voir</a>)</p>
                    <small>- Iconmarketpk </small><br>

                    <p class="no-p">Image Principal - Page Accueil (<a class="link" href="assets/Biofib-isolation-naturelle-pose-saine-3.png">Voir</a>)</p>
                    <small>- Biofib.com (<a class="link" href="https://biofib.com/">Lien</a>) </small><br>

                    <p class="no-p">Reste des images</p>
                    <small>- Canva.com (<a class="link" href="https://www.canva.com/">Lien</a>) </small><br>
                </div>
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px;color: #32b618">Technologies</h3>
                    <p class="no-p">FrameWork</p>
                    <small>- TyroSiteFrameWork (<a class="link" href="https://github.com/TheMaxium69/TyroSiteFrameWork">Link</a>) </small><br>
                    <p class="no-p">Librairies</p>
                    <small>- Bootstrap-4.3.1 </small><br>
                    <small>- FontAwesome-5.15.4</small><br>
                    <small>- JQuery-3.4.1</small><br>
                    <small>- Normalize</small><br>
                    <small>- GoogleFront</small><br>
                    <small>- iziToast</small><br>
                    <p class="no-p">Extentions</p>
                    <small>- PhpMyAdmin</small><br>
                    <small>- MySQL</small><br>
                    <p class="no-p">Languages</p>
                    <small>- HTML</small><br>
                    <small>- CSS</small><br>
                    <small>- JavaScript</small><br>
                    <small>- PHP</small><br>
                    <small>- SQL</small><br>
                </div>
            </div>

            <h2 style="margin-top: 20px;text-align: center; margin-bottom: 10px; color: #32b618"><i class="fas fa-balance-scale"></i> Droits</h2>
            <div style="text-align: center">
                <p class="no-p bold">L'intégralité du site et de ses contenus postés sur les serveurs, les contenus mis en ligne qui sont rendus publics, les images, les textes et tout les écrits, le design, le code-source, les logos, les visuels, les photos ainsi que les produits, appartiennent entièrement à Bâtir Positif.
                    <br>Cela grâce au copyright (© 2023 Bâtir Positif)
                    <br>Et à l'article L111-1 du code de la propriété intellectuelle française.</p>
            </div>
            <br>
            <div class="row">
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Toutes les marques listées appartiennent à leur créateur. (Nom, produit et visuel associé.) </p>
                    <small>BâtirPositif ®</small><br>
                    <br>
                </div>
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Tous les logos utilisés appartiennent à leur créateur.</p>
                    <small>© 2023 Meta</small><br>
                    <small>© LinkedIn Corporation 2023</small><br>
                </div>
            </div>
            <div style="text-align: center">
                <p class="no-p bold mobile">Informations Recoltées :</p>
                <p class="no-p">Toutes vos informations relatif à la communications entre vous et BâtirPositif. Ne serviront jamais à une autre utilisation. Elle ne seront donc jamais revendues, ou partagées.</p>
            </div>

        </div>
    </section>


    <div style="margin-bottom: 70px"></div>
</main>

<?php footer($page); ?></body> </html>