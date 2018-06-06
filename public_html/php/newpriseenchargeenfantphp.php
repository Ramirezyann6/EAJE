<html lang="fr-FR">
    <?php include('../php/priseencharge.php');?>
    <head>
        <title>Prise en charge d'un enfant</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Découvrez le site de gestion des crèches de la ville de Sanary sur Mer" />
        
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker6" ).datepicker({
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
                <section id="formulaireEnregistrementPriseChargeEnfant">
            <form method="POST" action="../php/priseencharge.php">
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Prise en charge de l'enfant</FONT></font> </legend>                    
                    <p><label><FONT color="white">Date de prise en charge de l'enfant : </FONT></label>
                    <input type="text" name="datepicker6" id="datepicker6"></p>
                    <br /><p>
                        <label for="lst_nomCreche"><FONT color="white">Structure retenue : </FONT></label>
                        <select name="lst_nomCreche" id="lst_nomCreche">
                            <option value="Les Bambinoux">Les Bambinoux</option>
                            <option value="Les Canailloux">Les Canailloux</option>
                            <option value="Le Petit Prince du Verger">Le Petit Prince du Verger</option>
                            <option value="Un Petit Coin de Paradis">Un Petit Coin de Paradis</option>
                            <option value="La Petite Etoile">La Petite Etoile</option>
                            <option value="Micro-crèche privée">Micro-crèche privée</option>
                            <option value="Babynounous">Babynounous</option>
                        </select>
                    </p>
                    <p id="controles"><input type="submit" name="sub_validationPriseChargeEnfant" value="Validation" /> <input type="reset" name="rst_annulerPriseChargeEnfant" value="Annuler" /></p>
                </fieldset>
                </section>
         </section>
    </body>
</html>
