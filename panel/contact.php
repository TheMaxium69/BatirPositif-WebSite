<?php include "app.php"; navbar(6); ?>

<main>


    <?php
    echo "Page -> Contact";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idContact = $_GET['del'];
        delContact($idContact);
    }

    ?>

    <table class="container py-5">
        <h4 class="container">Page Contact</h4>
        <tr>
            <th scope="col">Type</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro</th>
            <th scope="col">Text</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllContact = getAllContact();

        foreach ($AllContact as $OneContact){

//            $OneContact = getClassContact($contact);
            ?>

            <tr>
                <td><?php if (!empty($OneContact['type'])){

                        if ($OneContact['type'] == "*1*"){
                            echo "DEVIS GRATUIT";
                        }

                        if ($OneContact['type'] == "*2*"){
                            echo "DEMANDE DE PARTENARIAT";
                        }

                        if ($OneContact['type'] == "*3*"){
                            echo "ACCOMPAGNEMENT DECRÊT TERTIAIRE";
                        }

                    } else{

                        echo "CONTACT";

                    }?></td>

                <td><?php echo $firstName = substr($OneContact['firstName'], 1, -1); ?></td>
                <td><?php echo $lastName = substr($OneContact['lastName'], 1, -1); ?></td>
                <td><?php echo $email = substr($OneContact['email'], 1, -1); ?></td>
                <td><?php echo $phone = substr($OneContact['phone'], 1, -1); ?></td>
                <td><?php echo $content = substr($OneContact['content'], 1, -1); ?></td>
                <td><?php echo $OneContact['createdAt']; ?></td>
                <td><a href="?del=<?php echo $OneContact['id']; ?>"><i class="fas fa-trash"></i></a><a href="mailto:<?php echo $email = substr($OneContact['email'], 1, -1); ?>"><i class="fas fa-reply"></i></a></td>
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



<br>


</main>


</body> </html>