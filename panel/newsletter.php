<?php include "app.php"; ?>

<main>


    <?php
    echo "Page -> Newsletter";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idNews = $_GET['del'];
        delNewsletter($idNews);
    }
    ?>

    <table class="container py-5">
        <h4 class="container">Mail de la Newsletter</h4>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllMail = getAllNewsletter();

        foreach ($AllMail as $Newsletter){

            ?>
            <tr>
                <td><?php echo $email = substr($Newsletter['mail'], 1, -1); ?></td>
                <td><?php echo $Newsletter['createdAt']; ?></td>
                <td><a href="?del=<?php echo $Newsletter['id']; ?>"><i class="fas fa-trash"></i></a><a href="mailto:<?php echo $email = substr($Newsletter['mail'], 1, -1);  ?>"><i class="fas fa-reply"></i></a></td>
            </tr>

            <?php
        }
        ?>
        <style>
            i {
                color: #4D8D4C;
            }
        </style>
    </table>

</main>


</body> </html>