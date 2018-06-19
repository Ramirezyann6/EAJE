<html lang="fr-FR">
    <head>
        <title>Demande</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Ici, la liste des demandes" />
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
                    <li><a href="../php/newdemandephp.php">demande</a></li>
                </ul>
            </nav>
        </header>
         <section id="principal">
                <section id="general">
                    <form method="POST" action="../php/demande.php">
                <fieldset id="coordo">
                     <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enregistrement de la demande</FONT></font> </legend>
                    <p><label><FONT color="white">Numéro SGA : </FONT></label></p>
                    <p><input type="text" name="i_numSGA" id="i_numSGA" size="35" pattern="[0-9]+$" /></p>
                    <p><label><FONT color="white">Date de saisie de la fiche : </FONT></label>
                    <input type="text" name="datepicker1" id="datepicker1"></p>
                
                    <fieldset id="coordo2">
                        <legend><FONT color="white">Accusé de réception</FONT></legend>
                    <p><label><FONT color="white"> Date de l'accusé de réception : </FONT></label>
                        <input type="text" name="datepicker2" id="datepicker2">

                    <br /><p><label><FONT color="white">Type de réponse : </FONT></label>
                      
                       <input type="checkbox" name="chk_mail" id="chk_mail" value="mail"><label for="chk_mail"><FONT color="white">Mail</FONT></label>
                       <input type="checkbox" name="chk_courrier" id="chk_courrier" value="courrier"><label for="chk_courrier"><FONT color="white">Courrier</FONT></label>
                    </p>
                    </fieldset>
                </fieldset>
                   
                       <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Temps d'accueil</FONT></font> </legend>
                      
                    <p><input type="checkbox" name="partiel" id="chk_partiel" value="partiel"><label for="chk_partiel"><FONT color="white">Partiel</FONT></label></p>
                    <p><input type="checkbox" name="complet" id="chk_complet" value="complet"><label for="chk_complet"><FONT color="white">Complet/Occasionnel</FONT></label></p>
                    <p><input type="checkbox" name="regulier" id="chk_regulier" value="regulier"><label for="chk_regulier"><FONT color="white">Regulier</FONT></label></p>
                       </fieldset>
                    <fieldset id="coordo">
                                        <legend><font size="+3"><FONT color="white">Horaire matin :</FONT></font> </legend>
                    <p><label><FONT color="white">Debut :</FONT></label>
                    <input type="number" name="horaire_matin1" id="horaire_matin1" min="7" max="18" /><FONT color="white"> h </FONT><input type="number" name="horaire_matin2" id="horaire_matin2" min="0" max="59" /><FONT color="white"> min </FONT></p>
                    <p><label><FONT color="white">Fin :</FONT></label>
                    <input type="number" name="horaire_matin3" id="horaire_matin3" min="7" max="18" /><FONT color="white"> h </FONT><input type="number" name="horaire_matin4" id="horaire_matin4" min="0" max="59" /><FONT color="white"> min </FONT></p>
                    </fieldset>
                     <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Horaire après-midi :</FONT></font> </legend>
                    <p><label><FONT color="white">Debut :</FONT></label>
                    <input type="number" name="horaire_aprem1" id="horaire_aprem1" min="0" max="23" /><FONT color="white"> h </FONT><input type="number" name="horaire_aprem2" id="horaire_aprem2" min="0" max="59" /><FONT color="white"> min </FONT></p>
                    <p><label><FONT color="white">Fin :</FONT></label>
                    <input type="number" name="horaire_aprem3" id="horaire_aprem3" min="0" max="23" /><FONT color="white"> h </FONT><input type="number" name="horaire_aprem4" id="horaire_aprem4" min="0" max="59" /><FONT color="white"> min </FONT></p>
                    </fieldset>
                    <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Jours</FONT></font> </legend>
                      
                    <p><input type="checkbox" name="lundi" id="chk_lundi" value="lundi"><label for="chk_lundi"><FONT color="white">Lundi</FONT></label></p>
                    <p><input type="checkbox" name="mardi" id="chk_mardi" value="mardi"><label for="chk_mardi"><FONT color="white">Mardi</FONT></label></p>
                    <p><input type="checkbox" name="mercredi" id="chk_mercredi" value="mercredi"><label for="chk_mercredi"><FONT color="white">Mercredi</FONT></label></p>
                    <p><input type="checkbox" name="jeudi" id="chk_jeudi" value="jeudi"><label for="chk_jeudi"><FONT color="white">Jeudi</FONT></label></p>
                    <p><input type="checkbox" name="vendredi" id="chk_vendredi" value="vendrdi"><label for="chk_vendrdi"><FONT color="white">Vendredi</FONT></label></p>
                    </fieldset>
                    <p><label><FONT color="white">Mode de garde :</FONT></label></p>
                   <p><input type="radio" name="rd_modeGarde" value="modeGarde1" id="rd_modeGarde1" /> <label for="rd_modeGarde1"><FONT color="white">Collectif</FONT></label></p>
                   <p><input type="radio" name="rd_modeGarde" value="modeGarde2" id="rd_modeGarde2" /> <label for="rd_modeGarde2"><FONT color="white">Individuel</FONT></label></p>
                   
                   <br /><p>
                        <label for="lst_nomCreche2"><FONT color="white">Structure d'accueil : </FONT></label>
                        <select name="lst_nomCreche2" id="lst_nomCreche2">
                            <option value="1">Les Bambinoux</option>
                            <option value="2">Les Canailloux</option>
                            <option value="3">Le Petit Prince du Verger</option>
                            <option value="4">Un Petit Coin de Paradis</option>
                            <option value="5">La Petite Etoile</option>
                            <option value="6">Micro-crèche privée</option>
                            <option value="7">Babynounous</option>
                            <option value="8">Pas de préférence</option>
                        </select>
                    </p>
                   <p><label><FONT color="white">Commentaires de la famille :</FONT></label>
                    <textarea name="area_commentaireFam" id="area_commentraireFam" cols="50" rows="4"></textarea></p>
                    <p id="controles"><input type="submit" name="sub_validationNewDemande" value="Validation" /> <input type="reset" name="rst_annulerNewDemande" value="Annuler" /></p>
                </fieldset> 
                </fieldset> 
                </fieldset>
                </section>
         </section>
    </body>
</html>
