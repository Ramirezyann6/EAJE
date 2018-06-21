<html lang="fr-FR">
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
                dateFormat: 'dd/mm/yy'
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
                dateFormat: 'dd/mm/yy'
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
                    <p><label><FONT color="white">Date prévisionnelle: </FONT></label>
                    <input type="text" name="datepicker4" id="datepicker4"></p>
                    <p><label><FONT color="white">Date du besoin : </FONT></label>
                    <input type="text" name="datepicker5" id="datepicker5"></p>
                    <p id="controles"><input type="submit" name="sub_validationNewEnfant" value="Validation" /> <input type="reset" name="rst_annulerNewEnfant" value="Annuler" /></p>

                    
                    
                    
                    </fieldset>
                </section>
         </section>
    </body>
</html>
