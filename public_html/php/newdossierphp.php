<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <?php include('../php/ccasphp.php');?>
        <head>
        <title>Création d'un dossier</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Découvrez le site de gestion des crèches de la ville de Sanary sur Mer" />
        <link rel="stylesheet" href="../css/accueil.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/newDossier.css" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="../php/newdossierphp.php">Création d'un dossier</a></li>
                    <li><a href="../pages/newEnfant.html">Ajouter un enfant</a></li>
                    <li><a href="../pages/newCommentaire.html">Ajouter un commentaire</a></li>
                    <li><a href="../pages/priseChargeEnfant.html">Prise en charge d'un enfant</a></li>
                    <li><a href="../pages/listeTemp.html">Consultation de la liste</a></li>
                    
                </ul>
            </nav>
        </header>
        <section id="principal">
                <section id="formulaireEnregistrementDemande">
            <form method="POST" action="../php/ccasphp.php">
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enregistrement de la demande</FONT></font> </legend>
                    <p><label><FONT color="white">Numéro SGA : </FONT></label></p>
                    <p><input type="text" name="i_numSGA" id="i_numSGA" size="35" pattern="[0-9]" /></p>
                    <p><label><FONT color="white">Date de saisie de la fiche : </FONT></label>
                    <input type="number" name="num_jour" id="num_jour" min="1" max="31" /><FONT color="white"> / </FONT><input type="number" name="num_mois" id="num_mois" min="1" max="12" /><FONT color="white"> / </FONT><input type="number" name="num_annee" id="num_annee" min="2000" /></p>
                
                    <fieldset id="coordo2">
                        <legend><FONT color="white">Accusé de réception</FONT></legend>
                    <p><label><FONT color="white"> Date de l'accusé de réception : </FONT></label>
                        <input type="number" name="num_jourReception" id="num_jourReception" min="1" max="31" /><FONT color="white"> / </FONT><input type="number" name="num_moisReception" id="num_moisReception" min="1" max="12" /><FONT color="white"> / </FONT><input type="number" name="num_anneeReception" id="num_anneeReception" min="2000" /></p>
                    <br /><p><label><FONT color="white">Type de réponse : </FONT></label>
                      
                       <input type="checkbox" name="chk_mail" id="chk_mail" value="mail"><label for="chk_mail"><FONT color="white">Mail</FONT></label>
                       <input type="checkbox" name="chk_courrier" id="chk_courrier" value="courrier"><label for="chk_courrier"><FONT color="white">Courrier</FONT></label>
                    </p>
                    </fieldset>
                </fieldset>
                
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Parent référent</FONT></font></legend>
                   
                   <p><label><FONT color="white">Numéro allocataire CAF : </FONT></label>
                    <input type="text" name="i_numAlloCAF" id="i_numAlloCAF" size="35" pattern="[0-9]" /></p>
                   
                   <br /><p><label><FONT color="white">Civilité : </FONT></label>
                    <input type="text" name="i_civilite" id="i_civilite" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Nom : </FONT></label>
                    <input type="text" name="i_nom" id="i_nom" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Prénom : </FONT></label>
                    <input type="text" name="i_prenom" id="i_prenom" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">En poste/Activité : </FONT></label></p>
                   <p><input type="radio" name="rd_posteAct" value="oui4" id="rd_oui4" /> <label for="rd_oui4"><FONT color="white">Oui</FONT></label></p>
                   <p><input type="radio" name="rd_posteAct" value="non4" id="rd_non4" /> <label for="rd_non4"><FONT color="white">Non</FONT></label></p>
                   
                   
                   <br /><br /><p><label><FONT color="white">Activité professionnelle : </FONT></label></p>
                   <p><input type="text" name="i_actProf" id="i_actProf" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <br /><p><label><FONT color="white">Lieu activité : </FONT></label>
                    <input type="text" name="i_lieuActivite" id="i_lieuActivite" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Code postal du lieu d'activité: </FONT></label>
                    <input type="text" name="i_CP" id="i_CPact" size="35" pattern="[0-9]" /></p><br />
                   
                   <p><label><FONT color="white">Bénéficiaire minima social : </FONT></label></p>
                      
                   <p><input type="radio" name="rd_bms" value="oui" id="rd_oui" /> <label for="rd_oui"><FONT color="white">Oui</FONT></label></p>
                   <p><input type="radio" name="rd_bms" value="non" id="rd_non" /> <label for="rd_non"><FONT color="white">Non</FONT></label></p>
                  
                   
                    
                </fieldset>
                
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Second Parent</FONT></font></legend>
                   
                  
                   
                   <p><label><FONT color="white">Civilité : </FONT></label>
                    <input type="text" name="i_civilite2" id="i_civilite2" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Nom : </FONT></label>
                    <input type="text" name="i_nom2" id="i_nom2" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Prénom : </FONT></label>
                    <input type="text" name="i_prenom2" id="i_prenom2" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">En poste/activité : </FONT></label></p>
                   
                   <p><input type="radio" name="rd_posteAct" value="oui3" id="rd_oui3" /> <label for="rd_oui3"><FONT color="white">Oui</FONT></label></p>
                   <p><input type="radio" name="rd_posteAct" value="non3" id="rd_non3" /> <label for="rd_non3"><FONT color="white">Non</FONT></label></p>
                   
                   <br /><br /><p><label><FONT color="white">Activité professionnelle : </FONT></label>
                    <input type="text" name="i_actProf2" id="i_actProf2" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   
                       
                   
                   
                   <br /><p><label><FONT color="white">Lieu activité : </FONT></label>
                    <input type="text" name="i_lieuActivite2" id="i_lieuActivite2" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                   
                   <p><label><FONT color="white">Code postal du lieu d'activité: </FONT></label>
                    <input type="text" name="i_CP2" id="i_CPact2" size="35" pattern="[0-9]" /></p><br /><br />
                   
                   <label><FONT color="white">Bénéficiaire minima social : </FONT></label>
                   
                           
                   <p><input type="radio" name="rd_bms" value="oui2" id="rd_oui2" /> <label for="rd_oui2"><FONT color="white">Oui</FONT></label></p>
                   <p><input type="radio" name="rd_bms" value="non2" id="rd_non2" /> <label for="rd_non2"><FONT color="white">Non</FONT></label></p>
                   
                </fieldset>
                 
                    <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Renseignements supplémentaires</FONT></font></legend>
                    <p><label><FONT color="white">Adresse : </FONT></label>
                    <input type="text" name="i_adresse" id="i_adresse" size="35" pattern="[a-zA-Z\0-9\s\-]+$" /></p>
                     <p><label><FONT color="white">Code postal : </FONT></label>
                    <input type="text" name="i_CPfamille" id="i_CPfamille" size="35" pattern="([A-Z]+[A-Z]?\-)?[0-9]{1,2} ?[0-9]{3}" /></p>
                    <p><label><FONT color="white">Fixe : </FONT></label>
                    <input type="text" name="i_numTel" id="i_numTel" size="35" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" /></p>
                    <p><label><FONT color="white">Portable : </FONT></label>
                    <input type="text" name="i_numPort" id="i_numPort" size="35" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" /></p>
                     <p><label><FONT color="white">Adresse mail : </FONT></label>
                    <input type="text" name="i_email" id="i_email" size="35" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" /></p>
                    <p id="controles"><input type="submit" name="sub_validation" value="Validation" /> <input type="reset" name="rst_annuler" value="Annuler" /></p>
                </fieldset>
            </form>
                </section>

        </section>
        
                <?php
                $connexion=filter_input(INPUT_POST, 'sub_validation');
        if (isset ($connexion)){
            //On récupère les valeurs entrées par l'utilisateur :
            $prenom=filter_input(INPUT_POST, 'i_prenom');
            //On construit la date d'aujourd'hui
            //strictement comme sql la construit
            //$today = date("y-m-d");
            //On se connecte
            connectMaBase();
 
            //On prépare la commande sql d'insertion
            $sql = 'INSERT INTO parent (PRENOM) VALUES("'.$prenom.'")'; 
 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
 
            // on ferme la connexion
            mysql_close();
            echo 'insertion good';
        }
        ?>
    </body>
