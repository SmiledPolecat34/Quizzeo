<?php
function CreerJoueur (){
    $choix = $_POST['case'];
    //var_dump($_POST[$choix]);
    $mail = $_POST['mail'];
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
        $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
    }
}

if(isset($_POST['valider']))
{
    CreerJoueur();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='MainConnexion.css'>
    <title>QUIZZEO - connexion</title>
</head>

<body>
    <header>
        <div class ="backPart">       
            <div class="leftFont">
                <div id="title1">
                    <h1>
                        QUIZ
                    </h1>
                </div>
            </div>
            <div class="rightFont">
                <div id="title1">
                    <h1>
                        ZEO
                    </h1>
                </div>
            </div>
        </div>
       
            <div class="backConnexion">
                <div class ="pageConnexion">
                    <h3>Veuillez entrer vos identifiants pour vous connecter.
                    </h3>
                    <form class="form" action="Question.php" method="post">
                        <!-- Pseudo -->
                    <div id="Insc" class="pseudo">
                        <label for="pseudo">
                            Votre pseudo:
                        </label>
                        <input id="pseudo1" type="text" name="pseudo1" placeholder="Pseudo" required=""/>
                    </div>
                    <!-- Mdp -->
                    <div id="Insc" class="mdp">
                        <label for="pseudo">
                            Votre mot de passe:
                        </label>
                        <input id="mdp1" type="password" name="mdp1" placeholder="Mot de passe" required=""/>
                    </div>
                    <!-- Valider -->
                        <!-- <div id="Insc" class="connexion">
                            <a href="page.html">Connexion</a>
                        </div> -->
                        <input type="submit" name="submit" value="Connexion" class="submitconnexion">
                    </form>
                </div>
            </div>
        
    </header>
    <section>
        <article>
            
        </article>
    </section>
    <footer>
<!-- C'est moi copyright -->
    </footer>
    <script src="Connexion.js"></script>
</body>
</html>