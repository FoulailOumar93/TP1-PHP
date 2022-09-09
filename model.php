<?php
function getLesNotes() {
    $tNotes = array();
    for ($i = 0; $i < nbNotes; $i++) {
        $tNotes[$i] = abs(((int) (cos((float) $i + 1) * 1000)) % valSup);
    }
    var_dump($tNotes);
    return $tNotes;
}
function getMax($notes){
    return max($notes);
}
function indice($tableau,$value){
    for($i=0;$i<count($tableau);$i++){
        if ($value==$tableau[$i]){
            $indice=$i+1;

        }
    }
}
function getMin($notes){
    return min($notes);
}
function getLesLiens() {
    //les liens du menu
   return array(
        'recharger'=>"Recharger le tableau de notes",
        'afficher'=>"Afficher les notes",
        'max'=>"Afficher la note maximum",
        'min'=>"Afficher l'indice de la note minimum",
        'repartition'=>"Afficher les statistiques",
        'histogrammeLignes'=>"Afficher les statistiques en ligne",
        'histogrammeColonnes'=>"Afficher les statistiques en colonnes",

    );
}
function getDistribution($Notes) {
   
 

        $stat = array(
            '0-4' => 0,
            '4-8' => 0,
            '8-12' => 0,
            '12-16' => 0,
            '16-20' => 0
			);

        for ($i = 0; $i < sizeof($Notes); $i++) {

            if ($Notes[$i] < 4) {
                $stat['0-4'] += 1;
            } elseif ($Notes[$i] < 8) {
                $stat['4-8'] += 1;
            } elseif ($Notes[$i] < 12) {
                $stat['8-12'] += 1;
            } elseif ($Notes[$i] < 16) {
                $stat['12-16'] += 1;
            } else {
                $stat['16-20'] += 1;
            }
        }
		return $stat;
}


