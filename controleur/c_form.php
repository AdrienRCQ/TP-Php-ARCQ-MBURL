<?php

$immatColor = "white";
$immatValue = "";
if (isset($_POST['legal']['immat'])) {
    if ($_POST['legal']['immat'] == "") {
        $immatColor = "red";
    }else{
        $immatColor = "white";
        $immatValue = $_POST['legal']['immat'];
    }
}

$kilometrageColor = "white";
$kilometrageValue = "";
if (isset($_POST['usage']['km'])) {
    if ($_POST['usage']['km'] == "") {
        $kilometrageColor = "red";
    }else{
        $kilometrageColor = "white";
        $kilometrageValue = $_POST['usage']['km'];
    }
}

$nbjColor = "white";
$nbjValue = "";
if (isset($_POST['usage']['days'])) {//si la case est vide et que l'on valide le formulaire
    if ($_POST['usage']['days'] == "") {
        $nbjColor = "red";
    }else{
        $nbjColor = "white";
        $nbjValue = $_POST['usage']['days'];
    }
}

$checked = "checked";// vérif si le checkbox est coché ou pas
if(!empty($_POST['usage']['insurance'])){
    $checked = "checked";
}else{
    $checked = "";
}



// $_POST = [ //vérif la format des POST lors de la validation du formulaire
//     "legal" => [
//         "immat" => "XX-000-XX"
//     ],
//     "model" => [
//         "type" => "tourism",
//         "motor" => "diesel",
//     ],
//     "usage" => [
//         "km" => "12386",
//         "days" => "397",
//         "insurance" => true
//     ]
// ];

    
include("$racine/vue/nav.php");
include("$racine/vue/v_form.php");
?>