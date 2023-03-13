<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz en ligne</title>
    <link rel="stylesheet" href="pageQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <form action="pageQuizz.php" method="post">
    <div class="categorie">
        <h1>Catégorie de quizz</h1>
    </div>
    <div class="quizz">
        <div class="sport">
            <center><h2>Sport</h2>
            <img src="https://www.freepnglogos.com/uploads/sport-png/sport-sports-management-asb-online-34.png" alt="" width="200" height="200"></center>
            <button type="submit" name="bouton_sport" value="sport"></button>
        </div>
        <?php
        session_start();
if(isset($_POST["bouton_sport"])){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    $resultat=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where categorie='sport'");
    $a=array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
     $id_quiz = $ligne["Id_quizz"];
     $titre_quiz = $ligne["titre"];
     $categorie= $ligne["categorie"];
     $datecreation=$ligne["date_creation"];
     echo "<form method='post'>";
     echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
     echo "<input type='submit' name='submit' value='Jouer le quiz \"$titre_quiz\"'>";
     echo  "Titre : ".$titre_quiz." Catégorie : ".$categorie." Date de création : ".$datecreation.""."\r\n";
     echo "</form>";
     echo $id_quiz;
   }
 }
        ?>
        <div class="musique">
            <center><h2>Musique</h2>
            <img src="https://th.bing.com/th/id/R.82839718b2ad847514d7b559ed326f16?rik=PZfwK6KXpM42CA&riu=http%3a%2f%2fclipart-library.com%2fimages%2f6cp5a94di.png&ehk=U7EUjjy4NZKOnYskPWoFefApBeq%2f8y6sGyPGeCwrEOE%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="" width="160" height="160"></center>
            <button type="submit" name="bouton_musique" value="musique"></button>
        </div>
        <?php
if(isset($_POST["bouton_musique"])){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    $resultat=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where categorie='musique'");
    $a=array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
     $id_quiz = $ligne["Id_quizz"];
     $titre_quiz = $ligne["titre"];
     $categorie= $ligne["categorie"];
     $datecreation=$ligne["date_creation"];
     echo "<form method='post'>";
     echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
     echo "<input type='submit' name='submit' value='Jouer le quiz \"$titre_quiz\"'>";
     echo  "Titre : ".$titre_quiz." Catégorie : ".$categorie." Date de création : ".$datecreation.""."\r\n";
     echo "</form>";
     echo $id_quiz;
   }
 }
        ?>
        <div class="cinema">
            <center><h2>Cinéma</h2>
            <img src="https://th.bing.com/th/id/R.e3b00adadeab8cb91219827e0aa04c12?rik=uoIX4dOMrnuSqw&riu=http%3a%2f%2f3.bp.blogspot.com%2f-VufDdP764o0%2fUNI4eJbXj4I%2fAAAAAAAAKlA%2faXJS5Fa64vo%2fs1600%2fImagens-em-png-Queroimagem.com%2b(37).png&ehk=BnflVETAWIcUfNi9YXUEqVuEtIvTN%2fnqDmsi20%2bnRTY%3d&risl=&pid=ImgRaw&r=0" alt="" width="250" height="250"></center>
            <button type="submit" name="bouton_cinema" value="cinema"></button>
        </div>
        <?php
if(isset($_POST["bouton_cinema"])){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    $resultat=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where categorie='cinema'");
    $a=array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
     $id_quiz = $ligne["Id_quizz"];
     $titre_quiz = $ligne["titre"];
     $categorie= $ligne["categorie"];
     $datecreation=$ligne["date_creation"];
     echo "<form method='post'>";
     echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
     echo "<input type='submit' name='submit' value='Jouer le quiz \"$titre_quiz\"'>";
     echo  "Titre : ".$titre_quiz." Catégorie : ".$categorie." Date de création : ".$datecreation.""."\r\n";
     echo "</form>";
     echo $id_quiz;
   }
 }  
        ?>
        <div class="culture_generale">
            <center><h2>Culture générale</h2>
            <img src="https://pngimg.com/uploads/book/book_PNG51090.png" alt="" width="200" height="200"></center>
            <button type="submit" name="bouton_culture_generale" value="culture_generale"></button>

        </div>
        <?php
        if(isset($_POST["bouton_culture_generale"])){
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
             $mysqli = new mysqli("localhost", "root", "", "quizzeo");
            $resultat=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where categorie='culture_generale'");
            $a=array();
            while ($ligne = mysqli_fetch_assoc($resultat)) {
             $id_quiz = $ligne["Id_quizz"];
             $titre_quiz = $ligne["titre"];
             $categorie= $ligne["categorie"];
             $datecreation=$ligne["date_creation"];
             echo "<form method='post'>";
             echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
             echo "<input type='submit' name='submit' value='Jouer le quiz \"$titre_quiz\"'>";
             echo  "Titre : ".$titre_quiz." Catégorie : ".$categorie." Date de création : ".$datecreation.""."\r\n";
             echo "</form>";
             echo $id_quiz;
           }
         }  
        ?>
        <div class="hist_geo">
            <center><h2>Histoire-Géographie</h2>
            <img src="https://th.bing.com/th/id/R.f720c45993bfa2d2ddf171d755088c31?rik=UUo92yHXLY1GzQ&riu=http%3a%2f%2fidata.over-blog.com%2f1%2f70%2f54%2f14%2flogo_hist_geo.png&ehk=GBN%2bHb5wYCMS6%2bnZUskaTuqLGBDym%2fyThUnMxP4Dwuk%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="" width="200" height="130"></center>
            <button type="submit" name="bouton_hist_geo" value="hist_geo"></button>
        </div>
        <?php
        if(isset($_POST["bouton_hist_geo"])){
           mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = new mysqli("localhost", "root", "", "quizzeo");
           $resultat=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where categorie='hist_geo'");
           $a=array();
           $h=array();
           $i=1;
           while ($ligne = mysqli_fetch_assoc($resultat)) {
            $id_quiz = $ligne["Id_quizz"];
            $titre_quiz = $ligne["titre"];
            $categorie= $ligne["categorie"];
            $datecreation=$ligne["date_creation"];
            echo "<form method='post'>";
            echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
            echo "<input type='submit' name='submit' value='Jouer le quizz \"$titre_quiz\"'>";
            echo  "Titre : ".$titre_quiz." Catégorie : ".$categorie." Date de création : ".$datecreation.""."\r\n";
            echo "</form>";
            echo $id_quiz;
            header("Location: http://localhost/Quizzeo/QuestionsTest.php");

        }
            
        }
        $_SESSION['i']=null;        
        ?>
    </div>
    <div class="bouton">
        <div class="accueil">
            <a href="accueil.php">Accueil</a>
        </div>
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