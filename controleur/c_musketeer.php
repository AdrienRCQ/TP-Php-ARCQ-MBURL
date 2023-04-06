<?php

$musketeerManager = new musketeerManager();
require_once("$racine/ressources/data.php");

isset($_GET["id"]) ? $id = (int) $_GET["id"] : $id = 0;
isset($_GET["int_min"]) ? $int_min = (int) $_GET["int_min"] : $int_min = 0;

$Musketeers = $musketeerManager->getMusketeerById($id, $int_min);

include("$racine/vue/nav.php");
include("$racine/vue/v_musketeer.php");