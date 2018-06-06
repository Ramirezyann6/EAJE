<html lang="fr-FR">
    <?php include('../php/enfant.php');?>
    <head>
        <title>Nouvel enfant</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Découvrez le site de gestion des crèches de la ville de Sanary sur Mer" />
        
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/enfant.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker3" ).datepicker({
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
                dateFormat: 'DD, d MM, yy'
                    });
                });
        </script>
        <script>
            $(function() {
                $( "#datepicker4" ).datepicker({
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
                dateFormat: 'DD, d MM, yy'
                    });
                });
        </script>
        <script>
            $(function() {
                $( "#datepicker5" ).datepicker({
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
                dateFormat: 'DD, d MM, yy'
                    });
                });
        </script>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="../php/newdossierphp.php">Création d'un dossier</a></li>
                    <li><a href="../php/newenfantphp.php">Ajouter un enfant</a></li>
                    <li><a href="../php/newcommentairephp.php">Ajouter un commentaire</a></li>
                    <li><a href="../php/newpriseenchargeenfantphp.php">Prise en charge d'un enfant</a></li>
                    <li><a href="../pages/listeTemp.html">Consultation de la liste</a></li>
                </ul>
            </nav>
        </header>
          <section id="principal">
                <section id="formulaireEnregistrementEnfant">
            <form method="POST" action="../php/enfant.php">
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enfant</FONT></font> </legend>
                    <p><label><FONT color="white">Nom :</FONT></label>
                    <input type="text" name="i_nomEnfant" id="i_nomEnfant" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                    <p><label><FONT color="white">Prénom :</FONT></label>
                    <input type="text" name="i_prenomEnfant" id="i_prenomEnfant" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                    <p><label><FONT color="white">Date de naissance : </FONT></label>
                    <input type="text" name="datepicker3" id="datepicker3"></p>
                    <p><label><FONT color="white">Age (mois) :</FONT></label>
                    <input type="number" name="i_ageEnfant" id="i_ageEnfant" size="10" min="0"/></p>
                    <p><label><FONT color="white">Date prévisionnelle: </FONT></label>
                    <input type="text" name="datepicker4" id="datepicker4"></p>
                    <p><label><FONT color="white">Date du besoin : </FONT></label>
                    <input type="text" name="datepicker5" id="datepicker5"></p>
                    
                    <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Temps d'accueil</FONT></font> </legend>
                      
                    <p><input type="checkbox" name="partiel" id="chk_partiel" value="partiel"><label for="chk_partiel"><FONT color="white">Partiel</FONT></label></p>
                    <p><input type="checkbox" name="complet" id="chk_complet" value="complet"><label for="chk_complet"><FONT color="white">Complet/Occasionnel</FONT></label></p>
                    <p><input type="checkbox" name="regulier" id="chk_regulier" value="regulier"><label for="chk_regulier"><FONT color="white">Regulier</FONT></label></p>
                    
                    
                    
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
                    <p id="controles"><input type="submit" name="sub_validationNewEnfant" value="Validation" /> <input type="reset" name="rst_annulerNewEnfant" value="Annuler" /></p>
                    </fieldset>
                </section>
         </section>
    </body>
</html>
