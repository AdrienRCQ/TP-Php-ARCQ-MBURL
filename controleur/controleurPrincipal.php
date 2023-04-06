<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["form"] = "c_form.php";
    $lesActions["musketeer"] = "c_musketeer.php";
    $lesActions["installBDD"] = "c_installbdd.php";
    $lesActions["Characters"] = "c_characters.php";
    
    $lesActions["defaut"] = $lesActions["musketeer"];

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}


function chargerModeles($racine) {
    require_once("$racine/modele/Manager.php");
    require_once("$racine/modele/musketeer.php");
    require_once("$racine/modele/musketeerManager.php");
    require_once("$racine/modele/characters.php");
    require_once("$racine/modele/bd.install.php");
    require_once("$racine/modele/bd.characters.php");
}
