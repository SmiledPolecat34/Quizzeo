<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");

    session_start();
    $pseudo = $_SESSION['pseudo'];
    $mail=$_SESSION['mail'];
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
                        $id=$ligne["Id_utilisateur"];
                       
                        echo "- Id : " . $ligne["Id_utilisateur"]." --- pseudo : " . $ligne["pseudutilisateuro"]." --- Email : ".$ligne["email"]."<br>";
                        
                        ?>
                        <form action='modificationUtili.php' method='post'>
                            <?php
                            $id_utilisateur = $ligne['Id_utilisateur'];
                            echo "<input type='hidden' name='id_utilisateur' class='id_utilisateur' value=$id_utilisateur>" ?>
                            <button type="submit" name="modify-btn" class="buttonBlue modify-btn">Modifier</button>
                        </form>
                        <?php
                    }
                }else{
                    echo "0 resultats";
                }
            }
            AfficherProfil();

            //If the "Supprimer"'s button is clicked, the user is deleted of the database 
            if(isset($_POST["supprimer"])){
                $supp_utili=$_POST["supp1"];
                $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
                $Supprimer = $mysqli->query("DELETE FROM `quizzeo`.`utilisateur` WHERE `Id_utilisateur` = '$supp_utili';");
                header("Location:http://localhost/Quizzeo/GestionUtili.php");
                header("Refresh:0");
            }

            // if(isset($_POST["Modifier"])){
            //     $modif_utili=$_POST["modif1"];
            //     $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
            //     $Modifier =$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` WHERE `Id_utilisateur` = '$modif_utili';");
            //     // header("Refresh:0");
            // }


        ?>
    </h2>
    <div class="action">
    <!-- <form action="modificationUtili.php" method="post"> -->
            <!-- <div id="modifier">
                <label for="modif1">
                    Quel utilisateur voulez-vous modifier ?
                </label>
                <input id="modif1" type="text" name="modif1" placeholder="Id de l'utilisateur" />
            </div> -->
            <!-- <div class="modif">
                <a href="modificationUtili.php">Modifier</a>
                <form action="modificationUtili.php" method="post">
                    <input type="submit" name="modifier" value="Modifier" class="submitmodifier">
                </form>
            </div> -->
        <!-- <input type='submit' value='Modifier' name='Modifier'> -->
        
        <!-- <input type="submit" name="Modifier" value="Modifier" class="submitmodifier"> -->
    <!-- </form> -->
        <div id="supprimer">
            <label for="supp">
                Quel utilisateur voulez-vous supprimer ?
            </label>
            <input id="supp1" type="text" name="supp1" placeholder="Id de l'utilisateur" />
        </div>
        <input type='submit' name='supprimer' value='Supprimer' class="submitsupprimer">
        <!-- <a href="GestionUtili.php" type="submit" name="supprimer" value="Supprimer">Supprimer</a> -->
        <br>
        <form action="AjoutUtili.php">
            <input type='submit' name='Ajouter' value='Ajouter' class="submitajouter">
        </form>
    </div>
    <!-- <form class="retour"> -->
        <div >
            <!-- <input id="retour2" type="button" value="Retour" onclick="history.go(-1)"> -->
            <a href="accueil.php" value="Retour"><button>Retour</button></a>
            
        </div>
    <!-- </form> -->
    </form>
</body>