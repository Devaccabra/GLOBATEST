<?php
$alt_vent = 0;
$safe_zone = 0;

do{
    $nb_continent = readline("Largeur du continent (comprise entre 1 et 100 000) : ");
    if ($nb_continent < 1 || $nb_continent > 100000){
        echo "Erreur : la valeure doit être comprise entre 1 et 100 000."."\r\n";
    }
}while ($nb_continent < 1 || $nb_continent > 100000);

do{
    $str_altitutes = readline("Entrer les ".$nb_continent." valeurs séparées d'un espace (entre 0 et 100 000 : ");
    $altitudes = explode(" ", $str_altitutes);
}while(count($altitudes) != $nb_continent);

foreach ($altitudes as $altitude){
    if ($altitude < 0 || $altitude > 100000){
        echo "Erreur : Vous devez entrer des valeurs comprise entre 0 et 100 000";
        die();
    }
}

foreach ($altitudes as $altitude){
    if ($altitude >= $alt_vent){
        $alt_vent = $altitude;
    }else{
        $safe_zone++;
    }
}

echo "Nombre de safe zone : ".$safe_zone;
