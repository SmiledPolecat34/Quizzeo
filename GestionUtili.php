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
    <link rel='stylesheet' type='text/css' media='screen' href='GestionUtili.css'>
    <title>QUIZZEO_Gestion_Utilisateur</title>
</head>

<body>
    <header class="title">
            <h1>Quizzeo</h1>
    </header>
    <center><h1>Gestion des Utilisateurs</h1></center>
    <form action="GestionUtili.php" method="post">
    <h2>Utilisateurs : <br>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = new mysqli("localhost", "root", "", "quizzeo");

            function AfficherProfil(){
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
                $Profil = $mysqli->query("SELECT * FROM `quizzeo`.`utilisateur`;");
                if (mysqli_num_rows($Profil) > 0){
                    while ($ligne = mysqli_fetch_assoc($Profil)){
                        echo "- Id : " . $ligne["Id_utilisateur"]." --- pseudo : " . $ligne["pseudutilisateuro"]." --- Email : ".$ligne["email"]." --- MDP : ".$ligne["motDePasse"]."<br>";
                    }
                }else{
                    echo "0 resultats";
                }
            }
            AfficherProfil();

            if(isset($_POST["Supprimer"])){
                $supp_utili=$_POST["supp1"];
                $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
                $Supprimer = $mysqli->query("DELETE FROM `quizzeo`.`utilisateur` WHERE `Id_utilisateur` = '$supp_utili';");
                header("Refresh:0");
            }
        ?>
    </h2>
    <div class="action">
        <div id="modifier">
            <label for="modif">
                Quel utilisateur voulez-vous modifier ?
            </label>
            <input id="modif1" type="text" name="modif1" placeholder="Id de l'utilisateur" />
        </div>
        <input type='submit' value='Modifier' name='Modifier'>
        
        <div id="supprimer">
            <label for="supp">
                Quel utilisateur voulez-vous supprimer ?
            </label>
            <input id="supp1" type="text" name="supp1" placeholder="Id de l'utilisateur" />
        </div>
        <input type='submit' name='Supprimer' value='Supprimer' class="submitsupprimer">
    </div>
    <form class="retour">
        <div >
            <input id="retour2" type="button" value="Retour" onclick="history.go(-1)">
        </div>
    </form>
    </form>
</body>