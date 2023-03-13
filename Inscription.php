<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "quizzeo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='MainInscription.css'>
    <title>QUIZZEO - inscription</title>
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
                <div class ="texte">
                    Tu n'as toujours pas rejoint<br> le monde des quizzeurs ?<br>
                    Inscris-toi vite !<br>Et rejoins moi<br> pour une grande aventure !
                </div>
            </div>
            <div class="videoOP">
                <video autoplay loop controls src="OnePieceInscription.mp4">
                <source src="video.mp4" type="video/mp4">
            </div>
        </div>
        <form action="Connexion.php" method="post">
            <div class="backInscription">
                <div class ="pageInscription">
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
                            <!-- <a href="page.html">Valider</a> -->
                            <input type="submit" value="valider" name="valider">
                    </div>
                </div>
            </div>
        </form>
    </header>
    <section>
        <article>

        </article>
    </section>
    <footer>
<!-- C'est moi copyright -->
    </footer>
    <script src="Inscription.js"></script> 
</body>
</html>