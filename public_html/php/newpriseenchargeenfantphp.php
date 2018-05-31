<html lang="fr-FR">
    <?php include('../php/priseencharge.php');?>
    <head>
        <title>Prise en charge d'un enfant</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Découvrez le site de gestion des crèches de la ville de Sanary sur Mer" />
        
        <link rel="stylesheet" href="../css/styles.css" />
        
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
                    <input type="number" name="num_jourPriseChargeEnfant" id="num_jourPriseChargeEnfant" min="1" max="31" /><FONT color="white"> / </FONT><input type="number" name="num_moisPriseChargeEnfant" id="num_moisPriseChargeEnfant" min="1" max="12" /><FONT color="white"> / </FONT><input type="number" name="num_anneePriseChargeEnfant" id="num_anneePriseChargeEnfant" min="2000" /></p>
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
