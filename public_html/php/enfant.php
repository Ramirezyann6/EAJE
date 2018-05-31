<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}

$nom3=filter_input(INPUT_POST, 'i_nomEnfant');
$prenom3=filter_input(INPUT_POST, 'i_prenomEnfant');
$datenaissj=filter_input(INPUT_POST, 'num_jourDateNaissEnfant');
$datenaissm=filter_input(INPUT_POST, 'num_moisDateNaissEnfant');
$datenaissa=filter_input(INPUT_POST, 'num_anneeDateNaissEnfant');
$age=filter_input(INPUT_POST, 'i_ageEnfant');
$dateprevj=filter_input(INPUT_POST, 'num_jourDatePrevEnfant');
$dateprevm=filter_input(INPUT_POST, 'num_moisDatePrevEnfant');
$datepreva=filter_input(INPUT_POST, 'num_anneeDatePrevEnfant');
$datebesoinj=filter_input(INPUT_POST, 'num_jourDateBesoinEnfant');
$datebesoinm=filter_input(INPUT_POST, 'num_moisDateBesoinEnfant');
$datebesoina=filter_input(INPUT_POST, 'num_anneeDateBesoinEnfant');
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

$req6=$cnx->prepare('INSERT INTO enfant(NOM,PRENOM,DATE_NAISSANCEj,DATE_NAISSANCEm,DATE_NAISSANCEa,AGE, DATE_PREVISIONNELLEj,DATE_PREVISIONNELLEm,DATE_PREVISIONNELLEa) VALUES(:i_nomEnfant,:i_prenomEnfant,:num_jourDateNaissEnfant,:num_moisDateNaissEnfant,:num_anneeDateNaissEnfant, :i_ageEnfant,:num_jourDatePrevEnfant,:num_moisDatePrevEnfant,:num_anneeDatePrevEnfant)');
$req6->execute(array(
    'i_nomEnfant'=> $nom3,
    'i_prenomEnfant'=> $prenom3,
    'num_jourDateNaissEnfant'=> $datenaissj,
    'num_moisDateNaissEnfant'=>$datenaissm,
    'num_anneeDateNaissEnfant'=>$datenaissa,
    'i_ageEnfant'=>$age,
    'num_jourDatePrevEnfant'=>$dateprevj,
    'num_moisDatePrevEnfant'=>$dateprevm,
    'num_anneeDatePrevEnfant'=>$datepreva
));
echo 'enfant add';
?>
