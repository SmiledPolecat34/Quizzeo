<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz</title>
    <link rel="stylesheet" href="modificationQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <div class="organisation">
        <form action="modificationUtili.php">
        
            <div id="pseudo" class="Crea">
                <p>
                    <?php
                    session_start();
                    // $pseudo = $_SESSION['pseudo'];
                    // $mail=$_SESSION['mail'];

                    $id=$_SESSION['modif_utili'];
                    // $id=$_POST['Id_utilisateur'];
                    echo $id;
                    // var_dump($id);
                    function ModifierPseudo($id){
                        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                            $Pseudo=$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` WHERE Id_utilisateur='$id'");
                            //If at least one result is found, it displays it
                            if (mysqli_num_rows($Pseudo) > 0) {
                                // Affichage des données de chaque ligne
                                while ($ligne = mysqli_fetch_assoc($Pseudo)) {
                                    // echo $ligne["titre"]."\r\n";
                                }
                            }
                        }
                    ?>
                    <label for="pseudo">
                        <?php
                        echo "Votre pseudo: "/*.$pseudo*/;
                        ?>
                    </label>
                    
                    <br />
                    <label for="pseudo">
                        Entrez un nouveau pseudo :
                    </label>
                    <input id="pseudo" class="case" type="text" name="pseudo" placeholder="Votre pseudo"/>
                </p>
            </div>
            <input type="submit" name="modifier_pseudo" value="Modifier le pseudo" class="submitconnexion">     
            <?php
                //When the button is clicked
                     if(isset($_POST["modifier_pseudo"])){
                         //Retrieves the name of the quiz and will modify it in the database
                         $nouveauPseudo=$_POST['pseudo'];
                         $modif_utili=$_SESSION['modif_utili'];
                         $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                         $mysqli->query("UPDATE `quizzeo`.`quizz` SET `titre` = '$nouveauPseudo' WHERE Id_utilisateur='$id';");
                         //Refresh the page once
                         header("Refresh:0");
                     } 
                
                //Displays an error message
                     else {
                         echo "ERREUR PSEUDO";
                     }
                
                ModifierPseudo($id);
            ?>   

            <div id="email" class="Crea">
                <p>
                <?php
                        function ModifierEmail(){
                            $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                            $modif_utili=$_SESSION['modif_utili'];
                                $Email=$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` WHERE Id_utilisateur='$modif_utili'");
                                //If at least one result is found, it displays it
                                if (mysqli_num_rows($Email) > 0) {
                                    // Affichage des données de chaque ligne
                                    while ($ligne = mysqli_fetch_assoc($Email)) {
                                        // echo $ligne["titre"]."\r\n";
                                    }
                                }
                            }
                    ?>
                    <label for="email">
                    <?php
                        echo "Votre email: "/*.$mail*/;
                    ?>
                    
                    </label>
                    
                    <br />
                    <label for="email">
                        Entrez votre nouvel email :
                    </label>
                    <input id="email" class="case" type="text" name="email" placeholder="Votre email"/>
                </p>
            </div>
            <input type="submit" name="modifier_email" value="Modifier l'email" class="submitconnexion">     
            <?php
                //When the button is clicked
                     if(isset($_POST["modifier_nomquizz"])){
                         //Retrieves the name of the quiz and will modify it in the database
                         $nouveauMail=$_POST['email'];
                         $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                         $mysqli->query("UPDATE `quizzeo`.`utilisateur` SET `titre` = '$nouveauMail' WHERE Id_utilisateur='$modif_utili';");
                         //Refresh the page once
                         header("Refresh:0");
                     } 
                
                
                //Displays an error message
                    else {
                         echo "ERREUR EMAIL";
                     }
                
                ModifierEmail();
            ?>      
            <!-- <input id="retour2" type="submit"  name="retour" value="Retour" class="submit-retour" onclick="history.go(-1)"> -->
            <br>
            <a href="GestionUtili.php" class="retour">Retour</a>
        </form>
    </div>
    <script src="CreerQuizz.js"></script> 
</body>
</html>