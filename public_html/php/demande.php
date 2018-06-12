<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}

$partiel=filter_input(INPUT_POST, 'partiel');
$complet=filter_input(INPUT_POST, 'complet');
$regulier=filter_input(INPUT_POST, 'regulier');
$horairematdebh=filter_input(INPUT_POST, 'horaire_matin1');
$horairematdebm=filter_input(INPUT_POST, 'horaire_matin2');
$horairematfinh=filter_input(INPUT_POST, 'horaire_matin3');
$horairematfinm=filter_input(INPUT_POST, 'horaire_matin4');
$horaireapdebh=filter_input(INPUT_POST, 'horaire_aprem1');
$horaireapdebm=filter_input(INPUT_POST, 'horaire_aprem2');
$horaireapfinh=filter_input(INPUT_POST, 'horaire_aprem3');
$horaireapfinm=filter_input(INPUT_POST, 'horaire_aprem4');
$lundi=filter_input(INPUT_POST, 'lundi');
$mardi=filter_input(INPUT_POST, 'mardi');
$mercredi=filter_input(INPUT_POST, 'mercredi');
$jeudi=filter_input(INPUT_POST, 'jeudi');
$vendredi=filter_input(INPUT_POST, 'vendredi');
$modedegarde=filter_input(INPUT_POST, 'rd_modeGarde');
$structure=filter_input(INPUT_POST, 'lst_nomCreche2');
$commentairefam=filter_input(INPUT_POST, 'area_commentaireFam');

$req10=$cnx->prepare('INSERT INTO demande(PARTIEL,COMPLET,REGULIER,HORAIRE_MAT_DEB_H,HORAIRE_MAT_DEB_M,HORAIRE_MAT_FIN_H,HORAIRE_MAT_FIN_M,HORAIRE_AP_DEB_H,HORAIRE_AP_DEB_M,HORAIRE_AP_FIN_H,HORAIRE_AP_FIN_M,LUNDI,MARDI,MERCREDI,JEUDI,VENDREDI,MODE_GARDE,STRUCTURE,COMMENTAIRE_FAMILLE) VALUES (:partiel,:complet,:regulier,:horaire_matin1,:horaire_matin2,:horaire_matin3,:horaire_matin4,:horaire_aprem1,:horaire_aprem2,:horaire_aprem3,:horaire_aprem4,:lundi,:mardi,:mercredi,:jeudi,:vendredi,:rd_modeGarde,:lst_nomCreche2,:area_commentaireFam)');
$req10->execute(array(
    'partiel'=> $partiel,
    'complet'=> $complet,
    'regulier'=> $regulier,
    'horaire_matin1'=>$horairematdebh,
    'horaire_matin2'=>$horairematdebm,
    'horaire_matin3'=>$horairematfinh,
    'horaire_matin4'=>$horairematfinm,
    'horaire_aprem1'=>$horaireapdebh,
    'horaire_aprem2'=>$horaireapdebm,
    'horaire_aprem3'=>$horaireapfinh,
    'horaire_aprem4'=>$horaireapfinm,
    'lundi'=>$lundi,
    'mardi'=>$mardi,
    'mercredi'=>$mercredi,
    'jeudi'=>$jeudi,
    'vendredi'=>$vendredi,
    'rd_modeGarde'=>$modedegarde,
    'lst_nomCreche2'=>$structure,
    'area_commentaireFam'=>$commentairefam
));
echo 'Demande confirmé';
?>