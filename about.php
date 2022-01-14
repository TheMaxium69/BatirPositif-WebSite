<?php include "app/app.php"; $page = 3; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section class="about-story">


    </section>


    <section class="about-staff">

        <div class="about__section">

                <a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>1.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Habib BOUBIA</h4>
                        <h5 class="title">Post Post</h5>
                    </div>

                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>2.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Quentin Claudel</h4>
                        <h5 class="title">Post Post</h5>
                    </div>

                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>3.png');"></div>

                    <div class="about__info">
                        <h4 class="name">Youcef Messalti</h4>
                        <h5 class="title">Post Post</h5>
                    </div>


                </div></a><a><div class="about__slot">
                    <div class="headshot" style="background-image:url('<?php echo $env_assets . "staff/" ?>4.png');"></div>
                    <div class="about__info">
                        <h4 class="name">Elisabeth Merenna</h4>
                        <h5 class="title">Post Post</h5>
                    </div>

                </div></a>


        </div>


    </section>


</main>



<?php footer(); ?></body> </html>