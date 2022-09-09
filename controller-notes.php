<?php
switch ($action) {
    case 'accueil':
    {
        $message = "C'est la page d'accueil";
        include 'views/v_accueil.php';
        break;
    }
    case 'recharger':
    {
        $lesNotes = getLesNotes();
        $message = "données chargées";
        include("views/v_accueil.php");
        break;
    }
    case 'afficher':
    {
        $lesNotes = getLesNotes();
        include("views/v_afficher.php");
        break;
    }
    case 'max':
    {
        $lesNotes = getLesNotes();
        $max=getMax($lesNotes);
        $message = "La valeur max est $max";
        include("views/v_accueil.php");
        break;
    }    
    case 'min':
        $lesNotes = getLesNotes();
        $min = getMin($lesNotes);
        $message = "La valeur min est $min";
        include("views/v_accueil.php");
        break;
    case 'min':{
            $lesNotes = getLesNotes();
            $min = getMin($lesNotes);
            $message = "La valeur min est $min à l'indice est ".var_dump();
            include("views/v_statisque.php");
            break;}
    case 'repartition': {
        $lesNotes = getLesNotes();
        var_dump(getDistribution($lesNotes));
        break;
    }   
        default :
    {
        include 'views/404.php';
    }

        return $stat;
}