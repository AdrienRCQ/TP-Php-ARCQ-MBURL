<?php
if (isset($_POST['installBDD'])) {
    $installBDD = new install();

    $installBDD->installBDD("$racine/create_base.sql");

    echo "Installation effectuée";
}

include("$racine/vue/nav.php");
include("$racine/vue/installBDD.php");//on appel les vues
