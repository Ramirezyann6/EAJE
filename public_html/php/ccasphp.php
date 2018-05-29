<?php
try{
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
}
$civilite=filter_input(INPUT_POST, 'i_civilite');
$nom=filter_input(INPUT_POST, 'i_nom');
// On ajoute une entrée dans la table jeux_video
$req=$cnx->prepare('INSERT INTO parent(NUM_ALLOCATAIRE_CAF, PARENT_REF, CIVILITE, NOM, PRENOM, ENPOSTE, ACTIVITE_PRO, LIEU_ACTIVITE, CP_LIEU_ACTIVITE, RSA) VALUES("","",:i_civilite, :i_nom, "bibi", "non", "","","","oui")');
$req->execute(array(
	'i_civilite' => $civilite,
	'i_nom' => $nom
        ));
echo 'table parent ajouté';
?>