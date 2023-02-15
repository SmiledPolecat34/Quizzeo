<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");

    $pseudo = $mysqli->query('SELECT pseudutilisateuro FROM quizzeo.utilisateur');
    if (mysqli_num_rows($pseudo) > 0) {
                // Affichage des données de chaque ligne
                while ($ligne = mysqli_fetch_assoc($pseudo)) {
                    echo " - nom : " . $ligne["pseudutilisateuro"];
                }
            } 
        else {
            echo "0 résultats";
        }
    var_dump($pseudo);
    // $resultat=$mysqli->query("SELECT * FROM quizzeo.utilisateur where pseudutilisateuro='$pseudo' AND email='$mail';");
    $resultat = $mysqli->query('SELECT * FROM quizzeo.utilisateur');

    

    
// if(isset($_POST['valider']))
// {
//     CreerJoueur();
// }
// echo $pseudo;
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
            <!-- <h3 id="pseudo">Pseudo : $pseudo -->
                <?php
                    echo 'Pseudo : '. $pseudo;
                ?>
            <!-- </h3> -->
            <!-- <input type=hidden id=pseudoco value=  /> -->
            <!-- <h3 id="email">Email : $email -->
                <?php
                    echo 'Mail : '. $mail;
                ?>
            <!-- </h3> -->
            <!-- <h3 id="dateNaissance">Date de naissance : $date_de_naissance -->
                <!-- <?php
                    echo 'Pseudo : '. $_POST["pseudo"];
                    echo $datenaissance;
                ?> -->
            <!-- </h3> -->
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