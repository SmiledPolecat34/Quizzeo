<?php
session_start();


//recuperer choix
// $mdp=$_POST['motDePasse'];
// $role=$_POST['role'];
// $choix=$myslqi->query("SELECT * FROM `quizzeo.utilisateur` WHERE `pseudutilisateuro`='$pseudo' AND `email`='$mail' AND `motDePasse`='$mdp' AND 'role'='$role'; ");
// $resultat=mysql_query($choix);

// switch ($role){
//     case "1":
//         echo "1";
//         break;
//     case "2":
//         echo "2";
//         break;
//     default:
//         echo"3";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZEO</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <header class="title">
            <h1>Quizzeo</h1>
    </header>
    <div class="menu">
        <center><h2>Accueil</h2></center>
        <div id="profil">
            <a href="pageProfil2.php">Profil</a>
        </div>
        <div id="quizz">
            <a href="pageQuizz.html">Quizz</a>
        </div>
        <div id="mes_quizz">
            <a href="MesQuizz.html">Mes quizz</a>
        </div>
        <div id="creer">
            <a href="creationQuizz.html">Créer un quizz</a>
        </div>
        <div id="deconnexion">
            <center><a href="GestionUtili.php">Gestion des Utilisateurs</a></center>
        </div>
        <div id="deconnexion"> 
            <a href="Préconnexion.html">Déconnexion</a>
        </div>
    </div>
    <div class="texte">
        <p>Bonjour, et Bienvenue sur notre site Quizzeo. </br></br> Ici, vous pouvez jouer à plusieurs quizz de plusieurs catégories : Sport, Musique, ... <br> Si vous êtes utilisateur, je vous encourage à aller tester nos quizz sur le champs. Grâce à eux vous pourrez apprendre, tester vos connaissances et surtout vous amuser. <br> Si vous êtes des quizzer, j'ai le plaisir de vous annoncer que vous pourrez non seulement faire des quizz, mais également en créer. </br></p>
    </div>
    <footer class="contacter">
        <div class="organisation">
            <p>Au besoin, vous pouvez nous contacter :</p>
            <p><u>Morgane Harre :</u><br>Tel : .. .. .. .. .. <br>Email: m.harre@quizzeo.fr</p>
            <p><u>Sophie Tondeur : </u><br>Tel : .. .. .. .. .. <br>Email: s.tondeur@quizzeo.fr</p>
            <p><u>Franklin Versayo : </u><br>Tel : .. .. .. .. .. <br>Email: f.versayo@quizzeo.fr</p>
        </div>
        <div class="organisation_image">
            <img src="https://th.bing.com/th/id/OIP.63DXNT7dro-XDctQsQE7VwHaHa?pid=ImgDet&rs=1" alt="" width="200" height="200">
            <img src="https://th.bing.com/th/id/R.9a3a06f78cc0a8d79fce59e2de6da146?rik=nLAu3Z%2f0QUb%2fVw&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2fiynque%2fios7-style%2f1024%2fTwitter-icon.png&ehk=eD3Hc5yQAyP3AKPJoYHB8yeWKwKdaVAswR5kxmodex4%3d&risl=&pid=ImgRaw&r=0" alt="" width="180">
            <img src="https://www.freeiconspng.com/uploads/yahoo-mail-icon-30.png" alt="" width="160" height="160">
        </div>
    </footer>
</body>
</html>