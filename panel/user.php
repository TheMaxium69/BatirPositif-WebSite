<?php include "app.php"; ?>

<main>


    <?php
    echo "Page -> User";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['del'])){
        $idUser = $_GET['del'];
        delUser($idUser);
    }

    if (!empty($_POST['alias']) && !empty($_POST['email']) && !empty($_POST['password'])){
        createUser($_POST['alias'], $_POST['email'], $_POST['password']);
    }

    ?>

    <table class="container py-5">
        <h4 class="container">Compte du panel</h4>
        <tr>
            <th scope="col">Alias</th>
            <th scope="col">identifiant</th>
            <th scope="col">mots de passe</th>
            <th scope="col"></th>
        </tr>

        <?php

        $AllUsers = getAllUser();

        foreach ($AllUsers as $User){

            ?>
            <tr>
                <td><?php echo $User['alias']; ?></td>
                <td><?php echo $User['email']; ?></td>
                <td>•••••••••••••••••••••</td>
                <?php
                if ($User['id'] == $_SESSION['userIdLog']){ ?>
                    <td><a class="disabled" aria-disabled="true"><i class="fas fa-ban"></i></a></td>
                <?php } else { ?>
                    <td><a href="?del=<?php echo $User['id']; ?>"><i class="fas fa-trash"></i></a></td>
                <?php } ?>
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

    <div class="container py-5">

        <h4>Création de compte</h4>

        <form method="POST">

            <form>
                <div class="form-group">
                    <label>Nom du compte</label>
                    <input type="text" class="form-control" name="alias" required>
                    <small class="form-text text-muted">Il s'agit d'un sans importance</small>
                </div>
                <div class="form-group">
                    <label>Adresse Email</label>
                    <input type="text" class="form-control" name="email" required>
                    <small class="form-text text-muted">Il s'agit de l'identifiant de connexion</small>
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label class="form-check-label">Tu accepte avoir consciense que ce compte aura tout les acces du site</label>
                </div>
                <button type="submit" class="btn btn-success">Envoyé</button>
            </form>


        </form>

    </div>




</main>


</body> </html>