<?php
session_start();
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
//a rajouter le nom qui sera l'utilisateur
        $commentaire=filter_input(INPUT_POST, 'area_commentaire');
        $datecommentaire=filter_input(INPUT_POST, 'datepicker7');
        $datecommentaire2=implode('-',array_reverse (explode('/',$datecommentaire)));
        $redacteur=filter_input(INPUT_POST, 'i_nomRedac');
        
        $req3=$cnx->prepare('INSERT INTO commentaire(COMMENTAIRE,DATE_COMMENTAIRE,NOM_REDACTEUR) VALUES (:area_commentaire,:datepicker7, :i_nomRedac)');
        $req3->execute(array(
            'area_commentaire'=>$commentaire,
            'datepicker7'=>$datecommentaire2,
            'i_nomRedac'=>$redacteur
            ));
        $id_nouveau4 = $cnx->lastInsertId();
                    $req432 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdCommentaire = $req432->fetchColumn();
                    $_SESSION['id_commentaire']=$lastIdCommentaire;
                    
                    $req357=$cnx->prepare('UPDATE commentaire SET FK_DOSSIER = :id_dossier WHERE ID_COMMENTAIRE=:id_commentaire');
$req357->execute(array(
   'id_dossier'=>$_SESSION['id_dossier'],
   'id_commentaire' => $lastIdCommentaire));
            echo ' commentaire inseré !!!!';
           header('Location: general.php');
?>
