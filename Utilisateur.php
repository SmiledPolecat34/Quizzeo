<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
function Supprimer(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    if (isset($_POST['pseudutilisateuro'])) {

        // on recherche le numero du membre à supprimer
        $supprimer = 'SELECT Id_utilisateur FROM quizzeo.utilisateur WHERE nom = "'.$_POST["pseudutilisateuro"].'"';
        
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysql_query($supprimer) or die('Erreur SQL !<br />'.$supprimer.'<br />'.mysql_error());
        
        // on recupere le resultat sous forme d'un tableau
        $resultat = mysql_fetch_array($req);
        
        // on recupere la valeur qui nous intersse
        $numero_utilisateur = $resultat['numero'];
        
        // on libère l'espace mémoire alloué pour cette interrogation de la base
        mysql_free_result ($req);
        
        // lancement de la requête pour effacer notre membre
        $supprimer ='DELETE from quizzeo.utilisateur WHERE nom="'.$_POST['pseudutilisateuro'].'"';
        
        // on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
        mysql_query($supprimer) or die('Erreur SQL !'.$supprimer.'<br />'.mysql_error());
        
        // lancement de la requête pour effacer les disques de notre membre
        $supprimer ='DELETE from liste_disque WHERE numero="'.$numero_utilisateur.'"';
        
        // on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
        mysql_query($supprimer) or die('Erreur SQL !'.$supprimer.'<br />'.mysql_error());
        
        // on ferme la connexion à la base
        mysql_close();
        
        // un petit message afin de voir ce qui s'est passé
        echo 'Nous venons de supprimer '.$_POST['pseudutilisateuro'].' de la base ainsi que tous ces disques';
        }
        else {
        echo 'La variable de notre formulaire n\'est pas initialisée.';
        }
}
Supprimer();

function Modifier(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    $id = $_POST['Id_utilisateur'];
    $pseudo = $_POST['pseudutilisateuro'];
    $mail = $_POST['email'];
    $mdp = $_POST['motDePasse'];
    
    $modif = "UPDATE quizzeo.utilisateur SET pseudutilisateuro='$pseudo', email='$mail', motDePasse='$mdp' WHERE id='$id' ";
    $requete=mysqli_query($modif,$mysqli) or die (mysql_error());
    if($requete){
        echo("ok");
    }else{
        echo "error";
    }
}
Modifier();

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
    <!-- <header class="title">
            <h1>Quizzeo</h1>
    </header> -->

</body>

