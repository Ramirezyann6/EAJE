<html lang="fr-FR">
    <head>
        <title>Nouveau commentaire</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Découvrez le site de gestion des crèches de la ville de Sanary sur Mer" />
        
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/commentaire.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker7" ).datepicker({
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
                    <li><a href="../php/newPREC.php">PREC</a></li>
                </ul>
            </nav>
        </header>
        <section id="principal">
                <section id="formulaireEnregistrementCommentaire">
            <form method="POST" action="../php/commentaire.php">
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Commentaires</FONT></font> </legend>
                    <p><label><FONT color="white">Saisir le commentaire :</FONT></label>
                    <textarea name="area_commentaire" id="area_commentraire" cols="90" rows="4"></textarea></p>
                    <p><label><FONT color="white">Date du commentaire : </FONT></label>
                    <input type="text" name="datepicker7" id="datepicker7"></p>
                    <br /><p><label><FONT color="white">Nom du redacteur :</FONT></label>
                    <input type="text" name="i_nomRedac" id="i_nomRedac" size="35" pattern="[a-zA-Z\s\-]+$" /></p>
                    <p id="controles"><input type="submit" name="sub_validationCom" value="Validation" /> <input type="reset" name="rst_annulerComm" value="Annuler" /></p>
                    
                </fieldset>
                </section>
         </section>
    </body>
</html>