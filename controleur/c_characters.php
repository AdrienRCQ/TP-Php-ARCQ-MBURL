<?php
$bd_characters = new BDDcharacters();

$Characters = $bd_characters->getAllCharacters();

include("$racine/vue/nav.php");
include("$racine/vue/v_characters.php");