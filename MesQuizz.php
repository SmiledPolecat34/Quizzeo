<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes_Quizz</title>
    <link rel="stylesheet" href="MesQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <form action="Question.php" method="post">
        <?php
            session_start();
            $pseudoco=$_SESSION['pseudo'];
            $mdpco=$_SESSION['mdp'];
            function AffichageQuizzQuizzeur ($pseudoco,$mdpco){
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $idUti=$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
                    $user = mysqli_fetch_array($idUti);
                    $id_utilisateur = $user["Id_utilisateur"];
                    echo $id_utilisateur;
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where Id_utilisateur='$id_utilisateur'");
                    if (mysqli_num_rows($Quizz) > 0) {
                        // Affichage des données de chaque ligne
                        while ($ligne = mysqli_fetch_assoc($Quizz)) {
                            echo " Nom : " . $ligne["titre"]. " Catégorie : " . $ligne["categorie"]. " Date de création : " . $ligne["date_creation"].""."\r\n";
                            ?>
                                <input type="submit" name="debut_quizz" value="Modifier le Quizz" class="submitconnexion">
                                <br>
                            <?php 
                        }
                    } else {
                        echo "Vous n'avez pas encore créé de quizz";
                    }
                }
            AffichageQuizzQuizzeur ($pseudoco,$mdpco);
            ?>
        <input type="submit" name="suivant2" value="Suivant" class="submit-suivant">
    </form>
</body>
</html>