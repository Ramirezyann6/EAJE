<html lang="fr-FR">
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
                $( "#datepicker12" ).datepicker({
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
                <section id="formulaireEnregistrementPriseChargeEnfant">
            <form method="POST" action="../php/PREC.php">
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Prise en charge de l'enfant</FONT></font> </legend>                    
                    <p><label><FONT color="white">Date de prise en charge de l'enfant : </FONT></label>
                    <input type="text" name="datepicker12" id="datepicker12"></p>
                    <br /><p>
                          <label for="lst_nomCreche"><FONT color="white">Structure d'accueil : </FONT></label>
                        <select name="lst_nomCreche" id="lst_nomCreche2">
                            <option value="">Pas de préférence</option>
                            <?php
                            try{ 
                            $cnx800 = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                              
                            $requette137=$cnx800->query(
                        'SELECT ID_STRUCTURE, NOM_STRUCTURE FROM STRUCTURE',PDO::FETCH_ASSOC);
                            
                           
                    foreach ($requette137 as $row) {
                        echo '<option value="'.$row['ID_STRUCTURE'].'">'.$row['NOM_STRUCTURE'].'</option>';
                        }
                        
                    ?>
                        </select>
                    </p>
                    <p id="controles"><input type="submit" name="sub_validationPriseChargeEnfant" value="Validation" /> <input type="reset" name="rst_annulerPriseChargeEnfant" value="Annuler" /></p>
                </fieldset>
                </section>
         </section>
    </body>
</html>