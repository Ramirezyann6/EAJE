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
                        $span_style = "macouleur";
                        $bgcolor = "bgcolor";
                        try{ 
                            $cnx = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                                    echo 'SELECT NOM,PRENOM FROM parent WHERE ID_PARENT='.$_SESSION['id_pa'].' AND ID_DOSSIER='.$_SESSION['id_dossier'].'<br>';            
                    $requette=$cnx->query(
                        'SELECT
                            p.NOM,p.PRENOM
                        FROM dossier d, parent p
                        WHERE   d.ID_DOSSIER=' . $_SESSION['id_dossier'] . '
                                AND
                                p.id_parent = d.fk_id_parent_ref
                                AND
                                p.ID_PARENT='.$_SESSION['id_pa'],PDO::FETCH_ASSOC);
                    foreach ($requette as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NOM'].'</p></td>'; " ";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['PRENOM'].'</p></td>';"<br>";
                    }
                        $requette2=$cnx->query('SELECT ADRESSE,PORTABLE,CP,ADRESSEMAIL FROM dossier WHERE ID_DOSSIER='.$_SESSION['id_dossier'].'',PDO::FETCH_ASSOC);
                    foreach ($requette2 as $row) {
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['ADRESSE'].'</p></td>'; "<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['PORTABLE'].'</p></td>';"<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['CP'].'</p></td>';"<br>";
                        echo '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['ADRESSEMAIL'].'</p></td>';"<br>";
                        }
                    ?>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Enfant</FONT></font> </legend>
                    
                    <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter un enfant"
                                             onclick="RedirectionJavascriptEnfant()"></p>
                    <?php 
                        try{ 
                            $cnx4 = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                    $requette12=$cnx4->query('SELECT NOM,PRENOM,AGE FROM enfant WHERE ID_ENFANT='.$_SESSION['id_enfant'].'',PDO::FETCH_ASSOC);
                    foreach ($requette12 as $row) {
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['NOM'].'</p></td>' ;" ";
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['PRENOM'].'</p></td>';"<br>";
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['AGE'].'</p></td>';"<br>";
                        }
                        
                    ?>
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Commentaire</FONT></font> </legend>
                    <p id="controles"><input name="bouton_terminer" type="button" value="Ajouter un commentaire"
                                             onclick="RedirectionJavascriptCommentaire()"></p>
                    
                    <?php 
                        try{ 
                            $cnx63 = new PDO('mysql:host=127.0.0.1;dbname=ccas', 'root', '');
                            }
                        catch (Exception $e){
                            die('Erreur : '.$e->getMessage());
                            }
                    $requette72=$cnx63->query('SELECT COMMENTAIRE,DATE_COMMENTAIRE FROM commentaire WHERE ID_COMMENTAIRE='.$_SESSION['id_commentaire'].'AND ID_DOSSIER ='.$_SESSION['id_dossier'],PDO::FETCH_ASSOC);
                    foreach ($requette72 as $row) {
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['COMMENTAIRE'].'</p></td>' ;" ";
                        print '<td class="'.$bgcolor.'"><p class="'.$span_style.'">'.$row['DATE_COMMENTAIRE'].'</p></td>';"<br>";
                        }
                        
                    ?>
                    
                </fieldset>
                <fieldset id="coordo">
                    <legend><font size="+3"><FONT color="white">Demande de prise en charge de l'enfant</FONT></font> </legend>
                </fieldset>
                </section>
         </section>
    </body>
</html>
