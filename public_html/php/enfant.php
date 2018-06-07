<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}

$nom3=filter_input(INPUT_POST, 'i_nomEnfant');
$prenom3=filter_input(INPUT_POST, 'i_prenomEnfant');
$datenaiss=filter_input(INPUT_POST, 'datepicker3');
$datenaiss2=implode('-',array_reverse (explode('/',$datenaiss)));
$age=filter_input(INPUT_POST, 'i_ageEnfant');
$dateprev=filter_input(INPUT_POST, 'datepicker4');
$dateprev2=implode('-',array_reverse (explode('/',$dateprev)));
$datebesoin=filter_input(INPUT_POST, 'datepicker5');
$datebesoin2=implode('-',array_reverse (explode('/',$datebesoin)));
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

$req6=$cnx->prepare('INSERT INTO enfant(NOM,PRENOM,DATE_NAISSANCE,AGE, DATE_PREVISIONNELLE) VALUES(:i_nomEnfant,:i_prenomEnfant,:datepicker3,:i_ageEnfant,:datepicker4)');
$req6->execute(array(
    'i_nomEnfant'=> $nom3,
    'i_prenomEnfant'=> $prenom3,
    'datepicker3'=> $datenaiss2,
    'i_ageEnfant'=>$age,
    'datepicker4'=>$dateprev2
));
echo 'enfant add';
?>
