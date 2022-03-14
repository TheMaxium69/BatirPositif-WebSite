<?php include "app.php"; navbar(2); ?>

<main>


    <?php
    echo "Page -> Général";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['name'])){

        $name = $_GET['name'];
        $content = $_GET['content'];

        editGeneral($name, $content);
    }


    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "adresse"){ $SectionAdresse = $EnvSection; }
        if ($EnvSection['name'] == "mail"){ $SectionMail = $EnvSection; }
        if ($EnvSection['name'] == "numero"){ $SectionNum = $EnvSection; }
        if ($EnvSection['name'] == "galery"){ $SectionGalery = $EnvSection; }
    }

    ?>

    <div class="container py-5">

        <h2>Mail du site</h2>

            <table class="container py-5">
                <tr>
                    <td><?php echo $SectionMail['content'] ?></td>
                    <td><a href="?edit=<?php echo $SectionMail['name'] ?>"><i class="fas fa-edit"></i></a></td>
                </tr>
            </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "mail"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Nouveau Mail" required name="content">
                <small class="form-text text-muted">Ce mail sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2>Numéro de téléphone du site</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionNum['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionNum['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "numero"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nouveau Numéro" required name="content">
                <small class="form-text text-muted">Ce Numéro sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2>Adresse du site</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionAdresse['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionAdresse['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "adresse"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nouvelle Adresse" required name="content">
                <small class="form-text text-muted">Cette adresse sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2>Activations de la galery</h2>

        <table class="container py-5">
            <tr>
                <td><?php if ($SectionGalery['content'] == "false"){ echo "Désactivé"; } else { echo "Activé"; } ?></td>
                <td><a href="?edit=<?php echo $SectionGalery['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "galery"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="content" value="true" <?php if ($SectionGalery['content'] == "true"){ echo "checked"; } ?> >
                <label class="form-check-label">
                    Activé
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="content" value="false" <?php if ($SectionGalery['content'] == "false"){ echo "checked"; } ?>>
                <label class="form-check-label">
                    Désactivé
                </label>
            </div><br>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>




    <br>

    <style>
        i.fas {
            color: #4D8D4C;
        }
    </style>


</main>


</body> </html>