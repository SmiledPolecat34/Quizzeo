<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");

    $id_Utili= 3;
    // $id_Utili=$_POST['Id_utilisateur'];
    function SupprimerUtili($id_Utili){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        // $mysqli->query("DELETE FROM `quizzeo`.`utilisateur` WHERE (`Id_utilisateur` = '$id_Utili');");
        $mysqli->prepare("DELETE FROM `quizzeo`.`utilisateur` WHERE $id_Utili = ?")->execute(array($id_Utili));
        header("Refresh:0");
        echo "L'utilisateur a été supprimé";
        // $redirect = "/";
        // header("Location: {$redirect}");
        // exit;
    }
    
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
                        echo "- id : " . $ligne["Id_utilisateur"]."- nom : " . $ligne["pseudutilisateuro"]." --- Email : ".$ligne["email"]." --- MDP : ".$ligne["motDePasse"]."<input type='submit' value='Modifier' name='Modifier'>"."<input type='submit' value='Supprimer' name='Supprimer'>"."<br>";
                    }
                }else{
                    echo "0 resultats";
                }
            }
            AfficherProfil();
        
            if(isset($_POST["Supprimer"])){
                SupprimerUtili($id_Utili);
            }
        ?>
    </h2>
    <div class="bouton">
        <div class="accueil">
            <a href="page.php">Accueil</a>
        </div>
    </div>
</body>