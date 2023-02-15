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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="pageProfil.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <form action="Question.php" method="post">
        <div class="titre2">
            <h1>Votre Profil</h1>
        </div>
        <div class="information">
            <h2>Informations :</h2>
        </div>
        <div class="vos_infos">
            <h3 id="pseudo">Pseudo : $pseudo
                <?php
                    $pseudo =$_REQUEST['pseudo'];
                    echo $pseudo;
                ?>
            </h3>
            <!-- <input type=hidden id=pseudoco value=  /> -->
            <h3 id="email">Email : $email
                <?php
                    echo $mail;
                ?>
            </h3>
            <h3 id="dateNaissance">Date de naissance : $date_de_naissance
                <?php
                    echo $datenaissance;
                ?>
            </h3>
        </div>
        <div class="button">
            <div class="accueil">
                <a href="page.html">Accueil</a>
            </div>
        </div>
    </form>
    <!-- <script src="profil.js"></script>  -->
</body>
</html>