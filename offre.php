<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="offre-title" class="container">
        <h1>
            TITLE
        </h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo
            nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.
        </p>

    </section>
    <br>

    <section id="offre-onglet" >

        <!-- Liste des onglets -->
        <nav id="onglets">
            <ul>
                <li class="onglet actif">Partie 1</li>
                <li class="onglet">Partie 2</li>
                <li class="onglet">Partie 3</li>
            </ul>
        </nav>

        <!-- Les contenus -->
        <article class="contenu actif ">
            <h2>contenu 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi a officia, voluptatibus autem quod minus, ex reprehenderit, aliquid adipisci doloribus suscipit modi est impedit molestiae eaque veritatis corporis alias laudantium!</p>
            <p>Autem consequatur soluta eligendi reiciendis! Accusamus minima explicabo architecto modi accusantium vitae dicta labore laborum quasi rem est ea doloribus delectus alias perferendis aliquid porro, quis quae optio possimus ipsum!</p>
            <p>Vitae totam recusandae perferendis molestias explicabo, tenetur veritatis placeat, ullam, adipisci eius voluptatibus est, distinctio commodi? Quia corrupti eligendi commodi ipsum a, quam voluptate temporibus quidem error placeat repudiandae voluptatibus!</p>
        </article>

        <article class="contenu">
            <h2>contenu 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi id illo quaerat accusamus vel, doloribus recusandae laborum quasi obcaecati itaque quibusdam ipsam impedit illum! Eligendi esse est, sapiente odit minus.</p>
            <p>Incidunt voluptatibus animi architecto magni ut, et corporis consectetur asperiores possimus ad, reiciendis ullam, cupiditate eius repellendus dolores vitae voluptatum itaque blanditiis debitis! Pariatur aut odit minus laudantium sunt error.</p>
        </article>

        <article class="contenu">
            <h2>Contenu 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In recusandae voluptates quae aperiam tempore, quaerat ea omnis fugit dolores molestias quidem, ex incidunt ipsa nemo beatae harum maiores quia voluptate?</p>
            <p>Labore ipsam sunt molestias autem architecto neque assumenda maxime, nihil voluptatum maiores dolor illo earum velit unde ipsa dolorem expedita, sequi quis commodi libero dignissimos asperiores. Nobis quae, incidunt rem.</p>
        </article>


    </section>

    <script src="javascript/offre.js"></script>




    <section id="offre-tous" style="background: #252525; color: white; padding: 10px 0px">

        <article class="row">
            <div class="col">
                <div style="    margin-left: 30px;">
                    <h2 class="art">Renovation</h2>
                    <p class="art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo
                        nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.</p>

                </div>
            </div>
            <div class="col" style="background: url('https://37.media.tumblr.com/8b4969985e84b2aa1ac8d3449475f1af/tumblr_n3iftvUesn1snvqtdo1_1280.jpg');    background-size: 607px;">

        </article>

        <article class="row">
            <div class="col" style="background: url('https://37.media.tumblr.com/8b4969985e84b2aa1ac8d3449475f1af/tumblr_n3iftvUesn1snvqtdo1_1280.jpg');    background-size: 607px; ">
            </div>
            <div class="col">
                <div style="    margin-left: 30px;">
                    <h2 class="art">Neuf</h2>
                    <p class="art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo
                        nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.</p>

                </div>
            </div>
        </article>

    </section>










</main>



<?php footer(); ?></body> </html>