<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
$num_allocataire_caf=$civilite=filter_input(INPUT_POST, 'i_numAlloCAF');
$civilite=filter_input(INPUT_POST, 'i_civilite');
$nom=filter_input(INPUT_POST, 'i_nom');
$prenom=filter_input(INPUT_POST, 'i_prenom');
$enposte=filter_input(INPUT_POST, 'rd_posteAct');
$activitepro=filter_input(INPUT_POST, 'i_actProf');
$lieuactivite=filter_input(INPUT_POST, 'i_lieuActivite');
$cplieuact=filter_input(INPUT_POST, 'i_CP');
$rsa=filter_input(INPUT_POST, 'rd_bms');
// On ajoute une entrée dans la table parent
$req=$cnx->prepare('INSERT INTO parent(NUM_ALLOCATAIRE_CAF, PARENT_REF, CIVILITE, NOM, PRENOM, ENPOSTE, ACTIVITE_PRO, LIEU_ACTIVITE, CP_LIEU_ACTIVITE, RSA) VALUES(:i_numAlloCAF,"",:i_civilite, :i_nom, :i_prenom, :rd_posteAct, :i_actProf,:i_lieuActivite,:i_CP,:rd_bms)');
$req->execute(array(
        'i_numAlloCAF'=>$num_allocataire_caf,
	'i_civilite' => $civilite,
	'i_nom' => $nom,
        'i_prenom' => $prenom,
        'rd_posteAct' => $enposte,
        'i_actProf'=>$activitepro,
        'i_lieuActivite'=>$lieuactivite,
        'i_CP'=>$cplieuact,
        'rd_bms'=>$rsa
        ));
echo 'table parent ajouté';

$numsga=filter_input(INPUT_POST, 'i_numSGA');
$datesaisiefichej=filter_input(INPUT_POST, 'num_jour');
$datesaisiefichem=filter_input(INPUT_POST, 'num_mois');
$datesaisiefichea=filter_input(INPUT_POST, 'num_annee');
$dateaccuserecepj=filter_input(INPUT_POST, 'num_jourReception');
$dateaccuserecepm=filter_input(INPUT_POST, 'num_moisReception');
$dateaccuserecepa=filter_input(INPUT_POST, 'num_anneeReception');
$typerepmail=filter_input(INPUT_POST, 'chk_mail');
$typerepcourrier=filter_input(INPUT_POST, 'chk_courrier');
$adresse=filter_input(INPUT_POST, 'i_adresse');
$cp=filter_input(INPUT_POST, 'i_CPfamille');
$fixe=filter_input(INPUT_POST, 'i_numTel');
$portable=filter_input(INPUT_POST, 'i_numPort');
$mail=filter_input(INPUT_POST, 'i_email');

$req2=$cnx->prepare('INSERT INTO dossier(NUMSGA, DATESAISIEDOSSIERj, DATESAISIEDOSSIERm, DATESAISIEDOSSIERa, DATEACCUSERECEPj, DATEACCUSERECEPm, DATEACCUSERECEPa, TYPEREPONSEMAIL, TYPEREPONSECOURRIER,ADRESSE,CP,FIXE,PORTABLE,ADRESSEMAIL) VALUES(:i_numSGA,:num_jour,:num_mois, :num_annee, :num_jourReception, :num_moisReception, :num_anneeReception,:chk_mail,:chk_courrier,:i_adresse,:i_CPfamille,:i_numTel,:i_numPort,:i_email)');
$req2->execute(array(
        'i_numSGA'=>$numsga,
	'num_jour' => $datesaisiefichej,
	'num_mois' => $datesaisiefichem,
        'num_annee' => $datesaisiefichea,
        'num_jourReception' => $dateaccuserecepj,
        'num_moisReception'=>$dateaccuserecepm,
        'num_anneeReception'=>$dateaccuserecepa,
        'chk_mail'=>$typerepmail,
        'chk_courrier'=>$typerepcourrier,
        'i_adresse'=>$adresse,
        'i_CPfamille'=>$cp,
        'i_numTel'=>$fixe,
        'i_numPort'=>$portable,
        'i_email'=>$mail
        ));
        echo ' et table dossier gooooooooooooooooooooooooooooood';
?>