<?php
//constantes du système
const nbNotes = 24;
const valSup = 20;

include("views/v_gabarit_entete.php") ;
include 'models/model.php';
$liens = getLesLiens();
include("views/v_gabarit_menu.php");


$uc = 'controller-notes';
$action = 'accueil';
if (isset($_REQUEST['action'])) {
    $action=$_REQUEST['action'];
}

if (isset($_REQUEST['controller'])) {
$uc=$_REQUEST['controller'];
}
include "controllers/$uc.php";

include 'views/v_gabarit_pied.php' ;