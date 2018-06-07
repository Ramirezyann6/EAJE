<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}        
        $dateprisecharge=filter_input(INPUT_POST, 'datepicker6');
        $dateprisecharge2=implode('-',array_reverse (explode('/',$dateprisecharge)));
        $choix=filter_input(INPUT_POST, 'lst_nomCreche');
        
        $req4=$cnx->prepare('INSERT INTO prise_en_charge(DATE_PRISE_EN_CHARGE, STRUCTURE) VALUES (:datepicker6, :lst_nomCreche)');
        $req4->execute(array(
            'datepicker6'=>$dateprisecharge2,
            'lst_nomCreche'=>$choix
            ));
            echo '  prise en charge ok';
?>