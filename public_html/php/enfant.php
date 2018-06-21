<?php
session_start();
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}

$nom3=filter_input(INPUT_POST, 'i_nomEnfant');
$prenom3=filter_input(INPUT_POST, 'i_prenomEnfant');
$datenaiss=filter_input(INPUT_POST, 'datepicker3');
$datenaiss2=implode('-',array_reverse (explode('/',$datenaiss)));
$dateprev=filter_input(INPUT_POST, 'datepicker4');
$dateprev2=implode('-',array_reverse (explode('/',$dateprev)));
$datebesoin=filter_input(INPUT_POST, 'datepicker5');
$datebesoin2=implode('-',array_reverse (explode('/',$datebesoin)));


$req6=$cnx->prepare('INSERT INTO enfant(NOM_ENFANT,PRENOM_ENFANT,DATE_NAISSANCE_ENFANT, DATE_PREVISIONNELLE_NAISSANCE_ENFANT) VALUES(:i_nomEnfant,:i_prenomEnfant,:datepicker3,:datepicker4)');
$req6->execute(array(
    'i_nomEnfant'=> $nom3,
    'i_prenomEnfant'=> $prenom3,
    'datepicker3'=> $datenaiss2,
    'datepicker4'=>$dateprev2
));

$id_nouveau3 = $cnx->lastInsertId();
$req41 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdEnfant = $req41->fetchColumn();
                    $_SESSION['id_enfant']=$lastIdEnfant;
                    
$req987=$cnx->prepare('UPDATE dossier SET FK_ID_ENFANT = :id_enfant WHERE ID_DOSSIER=:id_dossier');
$req987->execute(array(
        'id_enfant' => $lastIdEnfant,
        'id_dossier'=>$_SESSION['id_dossier']));
echo 'enfant add';


header('Location: general.php');
?>
