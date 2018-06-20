<?php
session_start();
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
$num_allocataire_caf=filter_input(INPUT_POST, 'i_numAlloCAF');
$civilite=filter_input(INPUT_POST, 'i_civilite');
$nom=filter_input(INPUT_POST, 'i_nom');
$prenom=filter_input(INPUT_POST, 'i_prenom');
$enposte=filter_input(INPUT_POST, 'rd_posteAct');
$activitepro=filter_input(INPUT_POST, 'i_actProf');
$lieuactivite=filter_input(INPUT_POST, 'i_lieuActivite');
$cplieuact=filter_input(INPUT_POST, 'i_CP');
$rsa=filter_input(INPUT_POST, 'rd_bms');
// On ajoute une entrée dans la table parent
$req=$cnx->prepare('INSERT INTO parent(NUM_ALLOCATAIRE_CAF, PARENT_REF, CIVILITE, NOM, PRENOM, ENPOSTE, ACTIVITE_PRO, LIEU_ACTIVITE, CP_LIEU_ACTIVITE, RSA) VALUES(:i_numAlloCAF,1,:i_civilite, :i_nom, :i_prenom, :rd_posteAct, :i_actProf,:i_lieuActivite,:i_CP,:rd_bms)');
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
$id_nouveau = $cnx->lastInsertId();
$req20 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastId = $req20->fetchColumn();
                    $_SESSION['id_pa']=$lastId;
echo 'table parent ref ajouté :' .$lastId;

$civilite2=filter_input(INPUT_POST, 'i_civilite2');
$nom2=filter_input(INPUT_POST, 'i_nom2');
$prenom2=filter_input(INPUT_POST, 'i_prenom2');
$enposte2=filter_input(INPUT_POST, 'rd_posteAct2');
$activitepro2=filter_input(INPUT_POST, 'i_actProf2');
$lieuactivite2=filter_input(INPUT_POST, 'i_lieuActivite2');
$cplieuact2=filter_input(INPUT_POST, 'i_CP2');
$rsa2=filter_input(INPUT_POST, 'rd_bms2');
// On ajoute une entrée dans la table parent
$req5=$cnx->prepare('INSERT INTO parent(PARENT_REF, CIVILITE, NOM, PRENOM, ENPOSTE, ACTIVITE_PRO, LIEU_ACTIVITE, CP_LIEU_ACTIVITE, RSA) VALUES("",:i_civilite2, :i_nom2, :i_prenom2, :rd_posteAct2, :i_actProf2,:i_lieuActivite2,:i_CP2,:rd_bms2)');
$req5->execute(array(
	'i_civilite2' => $civilite2,
	'i_nom2' => $nom2,
        'i_prenom2' => $prenom2,
        'rd_posteAct2' => $enposte2,
        'i_actProf2'=>$activitepro2,
        'i_lieuActivite2'=>$lieuactivite2,
        'i_CP2'=>$cplieuact2,
        'rd_bms2'=>$rsa2
        ));
        echo 'parent2 ajouter';
        
$adresse=filter_input(INPUT_POST, 'i_adresse');
$cp=filter_input(INPUT_POST, 'i_CPfamille');
$fixe=filter_input(INPUT_POST, 'i_numTel');
$portable=filter_input(INPUT_POST, 'i_numPort');
$mail=filter_input(INPUT_POST, 'i_email');
        
        $req30=$cnx->prepare('INSERT INTO dossier(NUMSGA, DATE_SAISIE_DOSSIER, DATE_ACCUSEE_RECEP, TYPEREPONSEMAIL, TYPEREPONSECOURRIER,ADRESSE,CP,FIXE,PORTABLE,ADRESSEMAIL) VALUES("","", "","","",:i_adresse,:i_CPfamille,:i_numTel,:i_numPort,:i_email)');
$req30->execute(array(
        'i_adresse'=>$adresse,
        'i_CPfamille'=>$cp,
        'i_numTel'=>$fixe,
        'i_numPort'=>$portable,
        'i_email'=>$mail
        ));

$id_nouveau8 = $cnx->lastInsertId();
$req100 = $cnx->query("SELECT LAST_INSERT_ID()");
                    $lastIdDossier = $req100->fetchColumn();
                    $_SESSION['id_dossier']=$lastIdDossier;
        echo ' partie sga ok';
        
 $req88=$cnx->prepare('UPDATE dossier SET FK_ID_PARENT_REF = :id_dossier_parent_ref WHERE ID_DOSSIER=:id_dossier');
$req88->execute(array(
    'id_dossier_parent_ref'=>$lastId,
    'id_dossier' => $lastIdDossier));
header('Location: general.php');
?>