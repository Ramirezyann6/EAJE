<html lang="fr-FR">
    <head>
        <title>General</title>
        <meta charset="utf-8" />
        <meta name="author" content="Ramirez Yann" />
        <meta name="description" content="Ici, la liste des demandes" />
        <link rel="stylesheet" href="../css/accueil.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/ListeTemp.css" />
        <script type="text/javascript">
      function RedirectionJavascriptEnfant(){
        document.location.href="../php/newenfantphp.php";
      }
   </script>
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
                <section id="general">
            <form id="form_contact" name="form_contact" >
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Dossier</FONT></font> </legend>
                    <div id="afficheElemDossier"></div>
                        <?php
                        session_start();
                        try{ 
                            $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                                                
                                    $requette=$cnx->query('SELECT NOM,PRENOM FROM parent WHERE ID_PARENT='.$_SESSION['id_pa'].'',PDO::FETCH_ASSOC);
                    foreach ($requette as $row) {
                        print $row['NOM']. " ";
                        print $row['PRENOM']."<br>";
                        }
                    ?>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enfant</FONT></font> </legend>
                    <?php     
                      try{ 
                            $cnx2 = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                                
                                    $requette2=$cnx2->query('SELECT NOM,PRENOM FROM enfant WHERE ID_ENFANT='.$_SESSION['id_enfant'].'',PDO::FETCH_ASSOC);
                    foreach ($requette2 as $row) {
                        print $row['NOM']. " ";
                        print $row['PRENOM']."<br>";
                        }
                        
                    ?>
                    <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter un enfant"
                                             onclick="RedirectionJavascriptEnfant()"></p>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Commentaire</FONT></font> </legend>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Demande de prise en charge de l'enfant</FONT></font> </legend>
                </fieldset>
                </section>
         </section>
    </body>
</html>
