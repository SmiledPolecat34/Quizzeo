<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");

session_start();
$pseudo = $_SESSION['pseudo'];
$mail=$_SESSION['mail'];
function AfficherProfil($pseudo,$mail){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
    $Profil = $mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` where pseudutilisateuro = '$pseudo' AND email='$mail';");
    // if (mysqli_num_rows($Profil) > 0){
    //     while ($ligne = mysqli_fetch_assoc($Profil)){
    //         echo "- nom : " . $ligne["pseudutilisateuro"]." ".$ligne["email"];
    //     }
    // }else{
    //     echo "0 resultats";
    // }
}

AfficherProfil($pseudo,$mail);

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
    <form action="accueil.php" method="post">
        <div class="titre2">
            <h1>Votre Profil</h1>
        </div>
        <div class="information">
            <h2>Informations :</h2>
        </div>
        <div class="vos_infos">
            <?php 
                echo 'Pseudo : '. $pseudo;
            ?>
            <br>
            <?php
                echo 'Mail : '. $mail;
            ?>
        </div>
        <form class="retour">
            <div>
                <!-- <a href="page.php">Retour</a> -->
                <input id="retour2" type="submit" value="Retour" name="retour">
                <?php
                if(isset($_POST["retour"])){
                    header("Location: http://localhost/Quizzeo/accueil.php");
                }
                ?>
            </div>
        </form>
    </form>
    <!-- onclick="history.go(-1)" -->
    <!-- <script src="profil.js"></script>  -->
</body>
</html>