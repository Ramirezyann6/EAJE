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
   <script type="text/javascript">
      function RedirectionJavascriptCommentaire(){
        document.location.href="../php/newcommentairephp.php";
      }
   </script>
   <script type="text/javascript">
      function RedirectionJavascriptDemande(){
        document.location.href="../php/newdemandephp.php";
      }
   </script>
      <script type="text/javascript">
      function RedirectionJavascriptprecc(){
        document.location.href="../php/newPREC.php";
      }
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
            <form id="form_contact" name="form_contact" >
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Dossier</FONT></font> </legend>
                    <div id="afficheElemDossier"></div>
                        <?php
                        session_start();
                        $span_style = "macouleur";
                        $bgcolor = "bgcolor";
                        try{ 
                            $cnx = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                                   
                    $requette=$cnx->query(
                        'SELECT
                            p.NOM_PARENT,p.PRENOM_PARENT
                        FROM dossier d, parent p
                        WHERE   d.ID_DOSSIER=' . $_SESSION['id_dossier'] . '
                                AND
                                p.ID_PARENT = d.FK_ID_PARENT_REF
                                AND
                                p.ID_PARENT='.$_SESSION['id_pa'],PDO::FETCH_ASSOC);
                    foreach ($requette as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NOM_PARENT'].'</p></td>'; " ";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['PRENOM_PARENT'].'</p></td>';"<br>";
                    }
                        $requette2=$cnx->query('SELECT ADRESSE_DOSSIER,TEL_PORTABLE_DOSSIER,CP_DOSSIER,ADRESSE_MAIL_DOSSIER FROM dossier WHERE ID_DOSSIER='.$_SESSION['id_dossier'].'',PDO::FETCH_ASSOC);
                    foreach ($requette2 as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['ADRESSE_DOSSIER'].'</p></td>'; "<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['TEL_PORTABLE_DOSSIER'].'</p></td>';"<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['CP_DOSSIER'].'</p></td>';"<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['ADRESSE_MAIL_DOSSIER'].'</p></td>';"<br>";
                        }
                    ?>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enfant</FONT></font> </legend>
                    
                    
                    <?php 
                        try{ 
                            $cnx4 = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                    $requette12=$cnx4->query('SELECT NOM_ENFANT,PRENOM_ENFANT FROM enfant WHERE ID_ENFANT='.$_SESSION['id_enfant'].'',PDO::FETCH_ASSOC);
                    foreach ($requette12 as $row) {
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NOM_ENFANT'].'</p></td>' ;" ";
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['PRENOM_ENFANT'].'</p></td>';"<br>";
                        }
                        
                    ?>
                    
                    <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter un enfant"
                                             onclick="RedirectionJavascriptEnfant()"></p>
                    
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Commentaire</FONT></font> </legend>
                   
                    
                    <?php 
                        try{ 
                            $cnx100 = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                            
                            
                            $requette172=$cnx100->query(
                        'SELECT
                            c.COMMENTAIRE,c.NOM_REDACTEUR
                        FROM commentaire c, dossier d
                        WHERE   
                                c.ID_COMMENTAIRE='.$_SESSION['id_commentaire'].'
                                AND
                                d.ID_DOSSIER = c.FK_DOSSIER 
                                AND
                                d.ID_DOSSIER=' . $_SESSION['id_dossier'].'' ,PDO::FETCH_ASSOC);
                            
                           
                    foreach ($requette172 as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['COMMENTAIRE'].'</p></td>'; "<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NOM_REDACTEUR'].'</p></td>';"<br>";
                        }
                        
                    ?>
                     <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter un commentaire"
                                             onclick="RedirectionJavascriptCommentaire()"></p>
                     
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Demande de prise en charge de l'enfant</FONT></font> </legend>
                    
                    <?php
                      try{ 
                            $cnx106 = new PDO('mysql:host=127.0.0.1;dbname=eaje', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                            
                              
                            $requette109=$cnx106->query(
                        'SELECT
                            d.NUMSGA_DOSSIER
                        FROM dossier d
                        WHERE
                                d.ID_DOSSIER=' . $_SESSION['id_dossier'].'' ,PDO::FETCH_ASSOC);
                            
                           
                    foreach ($requette109 as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NUMSGA_DOSSIER'].'</p></td>'; "<br>";
                        }
                        
                         
                        $requette115=$cnx106->query(
                        'SELECT
                            d.COMMENTAIRE_FAMILLE
                        FROM demande d
                        WHERE
                                d.ID_DEMANDE=' . $_SESSION['id_demande'].'' ,PDO::FETCH_ASSOC);
                            
                           
                    foreach ($requette115 as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['COMMENTAIRE_FAMILLE'].'</p></td>'; "<br>";
                        }
                    ?>
                    
                    <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter une demande"
                                             onclick="RedirectionJavascriptDemande()"></p>
                    
                    
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Prise en charge</FONT></font> </legend>
                    
                    
                 <p id="controles"><input name="bouton_terminer" type="button" value="Prise en charge de l'enfant"
                                             onclick="RedirectionJavascriptprecc()"></p>   
                    
                </fieldset>
                </section>
         </section>
    </body>
</html>
