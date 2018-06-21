<?php
session_start();
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
$numsga=filter_input(INPUT_POST, 'i_numSGA');
$datesaisiefiche=filter_input(INPUT_POST, 'datepicker1');
$datesaisiefiche2=implode('-',array_reverse (explode('/',$datesaisiefiche)));
$dateaccuserecep=filter_input(INPUT_POST, 'datepicker2');
$dateaccuserecep2=implode('-',array_reverse (explode('/',$dateaccuserecep)));
$dateaccuserecepa=filter_input(INPUT_POST, 'num_anneeReception');
$typerepmail=filter_input(INPUT_POST, 'chk_mail');
$typerepcourrier=filter_input(INPUT_POST, 'chk_courrier');
$adresse=filter_input(INPUT_POST, 'i_adresse');
$cp=filter_input(INPUT_POST, 'i_CPfamille');
$fixe=filter_input(INPUT_POST, 'i_numTel');
$portable=filter_input(INPUT_POST, 'i_numPort');
$mail=filter_input(INPUT_POST, 'i_email');

$req2=$cnx->prepare('UPDATE dossier SET NUMSGA_DOSSIER= :i_numSGA, DATE_SAISIE_DOSSIER= :datepicker1, DATE_ACCUSEE_RECEP_DOSSIER= :datepicker2, TYPE_REPONSE_DOSSIER= :chk_mail WHERE ID_DOSSIER = :id_doss');
$req2->execute(array(
        'i_numSGA'=>$numsga,
	'datepicker1' => $datesaisiefiche2,
        'datepicker2' => $dateaccuserecep2,
        'chk_mail'=>$typerepmail,
        'id_doss'=>$_SESSION['id_dossier']
        ));
        echo ' partie sga ok';
        
        
$partiel_complet=filter_input(INPUT_POST, 'rd_Part_Comp');
$occas_regulier=filter_input(INPUT_POST, 'rd_Part_Comp2');
$horairematdebh=filter_input(INPUT_POST, 'horaire_matin1');
$horairematfinh=filter_input(INPUT_POST, 'horaire_matin3');
$horaireapdebh=filter_input(INPUT_POST, 'horaire_aprem1');
$horaireapfinh=filter_input(INPUT_POST, 'horaire_aprem3');
$lundi=filter_input(INPUT_POST, 'lundi');
$mardi=filter_input(INPUT_POST, 'mardi');
$mercredi=filter_input(INPUT_POST, 'mercredi');
$jeudi=filter_input(INPUT_POST, 'jeudi');
$vendredi=filter_input(INPUT_POST, 'vendredi');
$modedegarde=filter_input(INPUT_POST, 'rd_modeGarde');
$commentairefam=filter_input(INPUT_POST, 'area_commentaireFam');

$req10=$cnx->prepare('INSERT INTO demande(PARTIEL_COMPLET,OCCASIONNEL_REGULIER,HORAIRE_MAT_DEB_H,HORAIRE_MAT_FIN_H,HORAIRE_AP_DEB_H,HORAIRE_AP_FIN_H,LUNDI,MARDI,MERCREDI,JEUDI,VENDREDI,MODE_GARDE,COMMENTAIRE_FAMILLE) VALUES (:rd_Part_Comp,:rd_Part_Comp2,:horaire_matin1,:horaire_matin3,:horaire_aprem1,:horaire_aprem3,:lundi,:mardi,:mercredi,:jeudi,:vendredi,:rd_modeGarde,:area_commentaireFam)');
$req10->execute(array(
    'rd_Part_Comp'=> $partiel_complet,
    'rd_Part_Comp2'=> $occas_regulier,
    'horaire_matin1'=>$horairematdebh,
    'horaire_matin3'=>$horairematfinh,
    'horaire_aprem1'=>$horaireapdebh,
    'horaire_aprem3'=>$horaireapfinh,
    'lundi'=>$lundi,
    'mardi'=>$mardi,
    'mercredi'=>$mercredi,
    'jeudi'=>$jeudi,
    'vendredi'=>$vendredi,
    'rd_modeGarde'=>$modedegarde,
    'area_commentaireFam'=>$commentairefam
));
$id_nouveau68 = $cnx->lastInsertId();
$req86 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdDemande = $req86->fetchColumn();
                    $_SESSION['id_demande']=$lastIdDemande;


$structure=filter_input(INPUT_POST, 'lst_nomCreche2');

$req107=$cnx->prepare('INSERT INTO structure (STRUCTURE_NOM) VALUES (:lst_nomCreche2)');
$req107->execute(array(
'lst_nomCreche2'=>$structure));

$id_nouveau568 = $cnx->lastInsertId();
$req636= $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdStructure = $req636->fetchColumn();
                    $_SESSION['id_structure']=$lastIdStructure;
                    
$req898=$cnx->prepare('UPDATE demande SET FK_STRUCTURE=:id_structure WHERE ID_DEMANDE=:id_demande');
$req898->execute(array(
    'id_structure'=>$_SESSION['id_structure'],
    'id_demande'=>$_SESSION['id_demande']
        ));


echo 'Demande confirmé';
header('Location: general.php');
?>