<?php include "app/app.php"; $page = 5; head($page); ?>
<body> <?php navbar($page); ?>

<?php if (!empty($_GET['name'])){

    if ($_GET['name'] == 1 || $_GET['name'] == 2 || $_GET['name'] == 3){
        $idForm = $_GET['name'];
    }
}?>

<main>
    <section id="contact-title" class="container">

        <?php

        if (!empty($idForm)){

            if ($idForm == 1){
                ?>

                <h1>
                    DEVIS GRATUIT
                </h1>
                <p>
                    Effectuez une demande de devis gratuitement pour un audit énergétique, AMO, maîtrise d'éxecution
                </p>

                <?php
            }

            if ($idForm == 2){
                ?>

                <h1>
                    DEMANDE DE PARTENARIAT
                </h1>
                <p>
                    Effectuez une demande de partenariat pour collaborer avec Bâtir Positif
                </p>

                <?php
            }

            if ($idForm == 3){
                ?>

                <h1>
                    ACCOMPAGNEMENT DECRÊT TERTIAIRE
                </h1>
                <p>
                    Faites vous accompagner dans vos démarches vis-à-vis du décret tertiaire
                </p>

                <?php
            }
        } else { ?>

            <h1>
                Parlez-nous de votre projet
            </h1>
            <p>
                Vous avez un projet de construction ou de rénovation et vous souhaitez vous faire accompagner de manière responsable  ? Écrivez-nous et discutons-en !
            </p>

        <?php } ?>

    </section>

    <hr class="title">

    <section id="contact-form" class="contact-wrap">
        <form action="db/add.php" class="contact-form" method="GET">
        <?php if (!empty($idForm)){

            if ($idForm == 1){
            ?>
                <input type="hidden" name="type" value="1">
            <?php
            }

            if ($idForm == 2){
                ?>

                <input type="hidden" name="type" value="2">

            <?php
            }

            if ($idForm == 3){
            ?>

                <input type="hidden" name="type" value="3">

            <?php
            }
        } ?>

            <div class="col-sm-12">
                <div class=" row">
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Prénom*</label>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Nom*</label>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="input-block">
                    <label for="">Email*</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="input-block">
                    <label for="">Numéro de téléphone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="input-block textarea">
                    <label for="">Déposez votre message ici*</label>
                    <textarea rows="3" type="text" class="form-control" name="content" required></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                            
                <div class="single-input text-center">               
                    <div class="g-recaptcha" data-theme="white" data-sitekey="<?= $env_captcha_clientid ?>"></div>
                </div>
                <style>
                    div.g-recaptcha {
                        margin: 0 auto;
                        width: 304px;
                        margin-bottom: 20px;
                    }
                </style>
            </div>
            <div class="col-sm-12">
                <input class="square-button" type="submit" value="Envoyé">
            </div>
        </form>
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="javascript/contact.js"></script>

<?php
require "db/function.php";  footer($page); ?></body> </html>