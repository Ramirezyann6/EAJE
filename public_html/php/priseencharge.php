<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}        
$dateprisechargej=filter_input(INPUT_POST, 'num_jourPriseChargeEnfant');
        $dateprisechargem=filter_input(INPUT_POST, 'num_moisPriseChargeEnfant');
        $dateprisechargea=filter_input(INPUT_POST, 'num_anneePriseChargeEnfant');
        $choix=filter_input(INPUT_POST, 'lst_nomCreche');
        
        $req4=$cnx->prepare('INSERT INTO prise_en_charge(DATEPRISECHARGEj,DATEPRISECHARGEm, DATEPRISECHARGEa, STRUCTURE) VALUES (:num_jourPriseChargeEnfant,:num_moisPriseChargeEnfant, :num_anneePriseChargeEnfant, :lst_nomCreche)');
        $req4->execute(array(
            'num_jourPriseChargeEnfant'=>$dateprisechargej,
            'num_moisPriseChargeEnfant'=>$dateprisechargem,
            'num_anneePriseChargeEnfant'=>$dateprisechargea,
            'lst_nomCreche'=>$choix
            ));
            echo '  prise en charge ok';
?>