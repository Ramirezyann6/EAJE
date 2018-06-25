<?php
session_start();
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}

$dateprecc=filter_input(INPUT_POST, 'datepicker12');
$dateprecc2=implode('-',array_reverse (explode('/',$dateprecc)));
$structure3=filter_input(INPUT_POST, 'lst_nomCreche');

$req77=$cnx->prepare('INSERT INTO PRECC (DATE_PRECC,STRUCTURE_RETENUE) VALUES (:datepicker12,:lst_nomCreche)');
$req77->execute(array(
	'datepicker12' => $dateprecc2,
        'lst_nomCreche' => $structure3
        ));
$id_nouveau45 = $cnx->lastInsertId();
                    $req448 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdPrecc = $req448->fetchColumn();
                    $_SESSION['id_precc']=$lastIdPrecc;
                    
$req898=$cnx->prepare('UPDATE demande SET FK_PRECC=:precc WHERE ID_DEMANDE=:id_demande');
$req898->execute(array(
    'precc'=>$lastIdPrecc,
    'id_demande'=>$lastIdDemande
        ));
        echo 'ok';
        header('Location: general.php');