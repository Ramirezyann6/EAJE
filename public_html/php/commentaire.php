<?php
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
        
        $req3=$cnx->prepare('INSERT INTO commentaire(COMMENTAIRE,DATE_COMMENTAIRE) VALUES (:area_commentaire,:datepicker7)');
        $req3->execute(array(
            'area_commentaire'=>$commentaire,
            'datepicker7'=>$datecommentaire2
            ));
            echo ' commentaire inseré !!!!';
            
?>
