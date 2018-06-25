<html lang="fr-FR">
    <head>
        <title>Demande</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Ici, la liste des demandes" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/newDossier.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script>
            $(function() {
                $( "#datepicker1" ).datepicker({
                altField: "#datepicker",
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.',
                dateFormat: 'dd/mm/yy'
                    });
                });
        </script>
        <script>
            $(function() {
                $( "#datepicker2" ).datepicker({
                altField: "#datepicker",
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.',
                dateFormat: 'dd/mm/yy'
                    });
                });
        </script>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="../php/newdossierphp.php">Création d'un dossier</a></li>
                    <li><a href="../pages/listeTemp.html">Consultation de la liste</a></li>
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
                    <p><input type="radio" name="rd_Part_Comp" value="partiel" id="rd_Part_Comp1" /> <label for="rd_Part_Comp"><FONT color="white">Partiel</FONT></label></p>
                   <p><input type="radio" name="rd_Part_Comp" value="complet" id="rd_Part_Comp2" /> <label for="rd_Part_Comp"><FONT color="white">Complet</FONT></label></p>
                   </br>
                   <p><input type="radio" name="rd_Part_Comp2" value="occasionnel" id="rd_Part_Comp3" /> <label for="rd_Part_Comp2"><FONT color="white">Occasionnel</FONT></label></p>
                   <p><input type="radio" name="rd_Part_Comp2" value="regulier" id="rd_Part_Comp4" /> <label for="rd_Part_Comp2"><FONT color="white">Régulier</FONT></label></p>
                   
                   
                       </fieldset>
                    <fieldset id="coordo">
                                        <legend><font size="+3"><FONT color="white">Horaire matin :</FONT></font> </legend>
                    <p><label><FONT color="white">Debut :</FONT></label>
                    <input type="text" name="horaire_matin1" id="horaire_matin1" min="7" max="18" /></p>
                    <p><label><FONT color="white">Fin :</FONT></label>
                        <input type="text" name="horaire_matin3" id="horaire_matin3" min="7" max="18" /></p>
                    </fieldset>
                     <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Horaire après-midi :</FONT></font> </legend>
                    <p><label><FONT color="white">Debut :</FONT></label>
                    <input type="text" name="horaire_aprem1" id="horaire_aprem1" min="0" max="23" /></p>
                    <p><label><FONT color="white">Fin :</FONT></label>
                    <input type="text" name="horaire_aprem3" id="horaire_aprem3" min="0" max="23" /></p>
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
                   <p><input type="radio" name="rd_modeGarde" value="collectif" id="rd_modeGarde1" /> <label for="rd_modeGarde1"><FONT color="white">Collectif</FONT></label></p>
                   <p><input type="radio" name="rd_modeGarde" value="individuel" id="rd_modeGarde2" /> <label for="rd_modeGarde2"><FONT color="white">Individuel</FONT></label></p>
                   
                   <br /><p>
                        <label for="lst_nomCreche2"><FONT color="white">Structure d'accueil : </FONT></label>
                        <select name="lst_nomCreche2" id="lst_nomCreche2">
                            <option value="">Pas de préférence</option>
                            <?php
                            try{ 
                            $cnx700 = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                              
                            $requette177=$cnx700->query(
                        'SELECT ID_STRUCTURE, NOM_STRUCTURE FROM STRUCTURE',PDO::FETCH_ASSOC);
                            
                           
                    foreach ($requette177 as $row) {
                        echo '<option value="'.$row['ID_STRUCTURE'].'">'.$row['NOM_STRUCTURE'].'</option>';
                        }
                        
                    ?>
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
