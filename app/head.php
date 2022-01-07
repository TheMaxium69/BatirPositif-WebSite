<?php

function head($page)
{
    include "env.php";

    if (!empty($env_page[$page])) {
        $title = $env_page[$page];
    } else {
        $title = $env_page[0];
    }

    echo '<!doctype html> <html lang="fr"> <head>';
    require_once "composant/meta.phtml";
    echo '<title>' . $title . '</title>';
    echo '<link href="' . $env_logoUrl . '" rel="shortcut icon">';
    require_once "extension.php";
    echo '</head>';
}
