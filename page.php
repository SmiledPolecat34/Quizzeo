<?php
session_start();
function Connexion (){
    
    $_SESSION['pseudo']=$_POST['pseudo1'];
    $pseudoco = $_SESSION['pseudo'];
    $_SESSION['mdp']=$_POST['mdp1'];
    $mdpco = $_SESSION['mdp'];    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $resultat=$mysqli->query("SELECT * FROM quizzeo.utilisateur where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");

       
        
        
        if (mysqli_num_rows($resultat) > 0) {
            while ($ligne = mysqli_fetch_assoc($resultat)) {
                // echo "- Id : " . $ligne["Id_utilisateur"]." - nom : " . $ligne["pseudutilisateuro"]." - role : " .$ligne["role"];
                $mail=$mysqli->query("SELECT email FROM quizzeo.utilisateur where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
                $row=mysqli_fetch_assoc($mail);
                $_SESSION['mail']=$row["email"];
                $id=$mysqli->query("SELECT Id_utilisateur FROM quizzeo.utilisateur where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
                $row=mysqli_fetch_assoc($id);
                $_SESSION['id']=$row["Id_utilisateur"];
                $role=$mysqli->query("SELECT role FROM quizzeo.utilisateur where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
                

                $role=$ligne["role"];
                // echo $role;
                switch($role){
                    case 1:
                        echo "<form action='pageProfil2.php'><input type='submit' name='Profil' value='Profil' ></form>";
                        echo "<form action='pageQuizz.php'><input type='submit' name='Quizz' value='Quizz' ></form>";
                        echo "<form action='Préconnexion.html'><input type='submit' name='Deconnexion' value='Deconnexion' ></form>";
                        break;
                    case 2 :
                        echo "<form action='pageProfil2.php'><input type='submit' name='Profil' value='Profil' ></form>";
                        echo "<form action='pageQuizz.php'><input type='submit' name='Quizz' value='Quizz' ></form>";
                        echo "<form action='MesQuizz.php'><input type='submit' name='MesQuizz' value='MesQuizz' ></form>";
                        echo "<form action='creationQuizz.php.php'><input type='submit' name='CreerQuizz' value='CreerQuizz' ></form>";
                        echo "<form action='Préconnexion.html'><input type='submit' name='Deconnexion' value='Deconnexion' ></form>";
                        break;
                    case 3 :
                        echo "<form action='pageProfil2.php'><input type='submit' name='Profil' value='Profil' ></form>";
                        echo "<form action='pageQuizz.php'><input type='submit' name='Quizz' value='Quizz' ></form>";
                        echo "<form action='MesQuizz.php'><input type='submit' name='MesQuizz' value='MesQuizz' ></form>";
                        echo "<form action='creationQuizz.php.php'><input type='submit' name='CreerQuizz' value='CreerQuizz' ></form>";
                        echo "<form action='GestionUtili.php'><input type='submit' name='GestionUtili' value='GestionUtili' ></form>";
                        echo "<form action='Préconnexion.html'><input type='submit' name='Deconnexion' value='Deconnexion' ></form>";
                        break;
                }
                
            }
        } else {
            echo "0 résultats";
            header("Location: http://localhost/Quizzeo/Connexion.php");
        }
    }
    // Connexion();
    
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
    <!-- <header class="title">
            <h1>Quizzeo</h1>
    </header> -->
    
    <div class="menu">
        <center><h2>Accueil</h2></center>
        
        <!-- <div id="profil">
            <a href="pageProfil2.php" name="Profil"><button>Profil</button></a>
        </div>
        <div id="quizz">
            <a href="pageQuizz.php" name="Quizz"><button>Quizz</button></a>
        </div>
        <div id="mes_quizz">
            <a href="MesQuizz.php" name="MesQuizz"><button>Mes quizz</button></a>
        </div>
        <div id="creer">
            <center><a href="creationQuizz.php" name="CreerQuizz"><button>Créer un quizz</button></a></center>
        </div>
        <form action="GestionUtili.php" method="post">
            <div id="gestionUtili"> -->
                <!-- <center><a href="GestionUtili.php" name="GestionUtili"><button>Gestion des Utilisateurs</button></a></center> -->
                <!-- <input type="submit" name="gestionUtili" value="GestionUtili"> -->
                <?php
                 Connexion();
                 ?>
            </div>
        <!-- </form>
        <div id="deconnexion"> 
            <a href="Préconnexion.html" name="Deconnexion"><button>Déconnexion</button></a>
        </div> -->
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
    <script src="page.js"></script>
</body>
</html>