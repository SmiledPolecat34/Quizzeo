<!-- <?php      
//   header('Location: <ital>mapage.php</ital>');      
?> -->
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
                        <a href="Préconnexion.html">
                            QUIZ
                        </a>
                    </h1>
                </div>
            </div>
            <div class="rightFont">
                <div id="title2">
                    <h1>
                        <a href="Préconnexion.html">
                            ZEO
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <form action="Connexion.php" method="post">
            <div class="backConnexion">
                <div class ="pageConnexion">
                    <h3>Veuillez entrer vos identifiants pour vous connecter.
                    </h3>
                    <div id="Insc">
                        <!-- Pseudo -->
                        <div class="pseudo">
                            <label for="pseudo">
                                Votre pseudo:
                            </label>
                            <input id="pseudo" type="text" name="pseudo" placeholder="Pseudo"/>
                        </div>
                        <!-- Mdp -->
                        <div class="mdp">
                            <label for="pseudo">
                                Votre mot de passe:
                            </label>
                            <input id="mdp" type="password" name="mdp" placeholder="Mot de passe"/>
                        </div>
                        <!-- Valider -->
                        <div class="connexion">
                            <input type="submit" name="connexion" value="Connexion" />
                        </div>
                    </div>
                    <div class="dedicace">
                        <p>Designed by Group 2.</p>
                    </div>
                    <div class="song">
                        <audio autoplay loop controls src="Test/QuizPrincipal.mp3"></audio>
                    </div>
                </div>
            </div>
        </form>
    </header>
    <footer>
    </footer>
</body>
</html>
<?php
// echo "Coucou";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "quizzeo");

session_start();


function CreerJoueur (){
    $_SESSION['case']=$_POST['case'];
    $choix = $_POST['case'];
    $mail = $_POST['mail'];
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
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
    }else{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $resultat = $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
    }
}

if(isset($_POST['valider']))
{
    CreerJoueur();
}
$pseudo = $mysqli->query('SELECT * FROM quizzeo.utilisateur WHERE pseudutilisateuro');
?>