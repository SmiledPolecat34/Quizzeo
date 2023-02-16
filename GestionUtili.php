<?php

function AfficherProfil(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli ("localhost", "root", "", "quizzeo");
    $Profil = $mysqli->query("SELECT * FROM `quizzeo`.`utilisateur`;");
    if (mysqli_num_rows($Profil) > 0){
        while ($ligne = mysqli_fetch_assoc($Profil)){
            echo "- nom : " . $ligne["pseudutilisateuro"]." --- Email : ".$ligne["email"]." --- MDP : ".$ligne["motDePasse"]."<br>";
        }
    }else{
        echo "0 resultats";
    }
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
        AfficherProfil();
    ?>
    </h2>
</body>