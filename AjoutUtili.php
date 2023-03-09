

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='GestionUtili.css'>
    <title>QUIZZEO_Gestion_Utilisateur</title>
</head>
<body>

    <header class="title">  
            <h1>Quizzeo</h1>
    </header>
    <form action="AjoutUtili.php" method="post">
        <div class="centre">
            <div class ="organisation">
                <!-- Choix -->
                <div id="Insc" class="choix" name="choix">
                    <input type="checkbox" id="case" name="case" value="quizzeur">
                    <label for="case">Quizzeur</label>
                </div>
                <div  class="choix" id="Insc" name="choix">
                      <input type="checkbox" id="case" name="case" value="classique" checked>
                      <label for="case">Utilisateur classique</label>
                </div>
                
                    <!-- Pseudo -->
                <div id="Insc" class="pseudo">
                    <label for="pseudo">
                        Votre pseudo:
                    </label>
                    <input id="pseudo" type="text" name="pseudo" placeholder="Pseudo" required=""/>
                </div>
                <!-- Mail -->
                <div id="Insc" class="mail">
                    <label for="mail">
                        Votre mail:
                    </label>
                    <input id="mail" type="email" name="mail" placeholder="Adresse mail" required=""/>
                </div>
                <!-- Date de naissance -->
                <div id="Insc" class="dateDeNaissance">
                    <label for="dateDeNaissance">
                        Votre date de naissance:
                    </label>
                    <input id="dateDeNaissance" type="date" name="dateDeNaissance" placeholder="jj/mm/aaaa" required=""/>
                </div>
                <!-- Mdp -->
                <div id="Insc" class="mdp">
                    <label for="pseudo">
                        Votre mot de passe:
                    </label>
                    <input id="mdp" type="password" name="mdp" placeholder="Mot de passe" required=""/>
                </div>
                <!-- Valider -->
                <div id="Insc" class="valider">
                        <a href="GestionUtili.php" name="Retour">Retour</a>
                        
                        <input type="submit" value="Valider" name="Valider">
                        <!-- <form action="GestionUtili.php">
                            <input type="submit" value="Retour" name="Retour">
                        </form> -->
                </div>
            </div>
        </div>
    </form>
    <?php
            function CreerJoueur (){
    
                $choix = $_POST['case'];
                //var_dump($_POST[$choix]);
                $mail = $_POST['mail'];
                $_SESSION["mail"] = $_POST["mail"];
                echo $mail;
                $pseudo = $_POST['pseudo'];
                $datenaissance = $_POST['dateDeNaissance'];
                $mdp = $_POST['mdp'];
                if($choix=="quizzeur"){
                    $role = 2;
                    echo ("2");
                }elseif($choix=="classique"){
                    $role = 1;
                    echo ("1");
                }
                if ($role==1){
                    //$joueur = new Utilisateur($mail, $pseudo, $datenaissance, $mdp);
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
                }else{
                    //$joueur = new Utilisateur($mail, $pseudo, $datenaissance, $mdp);
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $resultat = $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
                }
            }
            // CreerJoueur();
            if(isset($_POST['Valider']))
            {
                CreerJoueur();
                
            }

?>
</body>
</html>
