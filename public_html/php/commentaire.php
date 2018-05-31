<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
//a rajouter le nom qui sera l'utilisateur
        $commentaire=filter_input(INPUT_POST, 'area_commentaire');
        $datecommentairej=filter_input(INPUT_POST, 'num_jourcom');
        $datecommentairem=filter_input(INPUT_POST, 'num_moiscom');
        $datecommentairea=filter_input(INPUT_POST, 'num_anneecom');
        
        $req3=$cnx->prepare('INSERT INTO commentaire(COMMENTAIRE,COMMENTAIREj,COMMENTAIREm,COMMENTAIREa) VALUES (:area_commentaire,:num_jourcom, :num_moiscom, :num_anneecom)');
        $req3->execute(array(
            'area_commentaire'=>$commentaire,
            'num_jourcom'=>$datecommentairej,
            'num_moiscom'=>$datecommentairem,
            'num_anneecom'=>$datecommentairea
            ));
            echo ' commentaire inseré !!!!';
            
?>
