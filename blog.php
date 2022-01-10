<?php include "app/app.php"; $page = 4; head($page); ?>
<body> <?php navbar($page); ?>

<main>

    <section id="blog-title" class="container">
        <h1>
            TITLE
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eum explicabo in, ipsum itaque magnam nemo
            nesciunt numquam quae rem repudiandae. Ad atque distinctio hic praesentium quam voluptate voluptates.
        </p>

    </section>

    <hr class="blog">

    <section id="blog-article">

        <div class="container">


            <div class="column">
                <div class="demo-title"></div>
                <div class="post-module">
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <div class="post-content">
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock"></i> 6 mins ago</span><span class="comments"><?php custombtn("test", "Voir plus", "white", "green"); ?>   </span></div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="demo-title"></div>
                <div class="post-module">
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <div class="post-content">
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock"></i> 6 mins ago</span><span class="comments"><?php custombtn("test", "Voir plus", "white", "green"); ?>   </span></div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="demo-title"></div>
                <div class="post-module">
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <div class="post-content">
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock"></i> 6 mins ago</span><span class="comments"><?php custombtn("test", "Voir plus", "white", "green"); ?>   </span></div>
                    </div>
                </div>
            </div>

            <div class="column" style="border-radius: 10px">
                <div class="demo-title"></div>
                <div class="post-module">
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <div class="post-content">
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock"></i> 6 mins ago</span><span class="comments"><?php custombtn("test", "Voir plus", "white", "green"); ?>   </span></div>
                    </div>
                </div>
            </div>



        </div>



    </section>


</main>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="javascript/article.js"></script>

<?php footer(); ?></body> </html>