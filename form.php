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
        <form action="" class="contact-form ">

            <div class="col-sm-12">
                <div class=" row">
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Nom</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="input-block">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="input-block">
                    <label for="">Numéro de téléphone</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="input-block textarea">
                    <label for="">Déposez votre message ici</label>
                    <textarea rows="3" type="text" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <button class="square-button">Envoyé</button>
            </div>
        </form>
    </section>

</main>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="javascript/contact.js"></script>

<?php footer($page); ?></body> </html>