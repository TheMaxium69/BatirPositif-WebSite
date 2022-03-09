<?php

require "composant/head.phtml";
require "../db/app.php";
session_start();

if (!empty($_GET['logout'])){
    session_unset();
}

function form($isWonk = null){

    if ($isWonk){
        echo "louper";
    }

    ?>

    <div class="container py-5">
        <form method="POST">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <button type="submit" class="btn btn-success">Se Connecter</button>
        </form>
    </div>

    <?php
}

function navbar($page){
    require "composant/navbar.phtml";
}