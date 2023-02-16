<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz</title>
    <link rel="stylesheet" href="creationQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <form action="modificationQuizz.php" method="post">
    <div class="organisation">
        <div id="Crea" >
            <label for="nom_Quizz">
                Nom du quizz :
            </label>
            <?php
            $pseudoco="Tom";
            $mdpco="jesuisquizzeur";
            $idQuizz="1";
            function ModifierQuizzNom($pseudoco,$mdpco,$idQuizz){
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                    if (mysqli_num_rows($Quizz) > 0) {
                        // Affichage des données de chaque ligne
                        while ($ligne = mysqli_fetch_assoc($Quizz)) {
                            echo $ligne["titre"]."\r\n";
                            ?>
                                <div id="Crea" >
                                <label for="nom_Quizz">
                                    Entrez un nom pour le Quizz:
                                </label>
                                <input id="nom_Quizz" class="case" type="text" name="nom_Quizz" placeholder="Nom du quizz"/>
                                </div>
                                <input type="submit" name="modifier_nomquizz" value="Modifier le nom" class="submitconnexion">
                                <br>
                            <?php
                                if(isset($_POST["modifier_nomquizz"])){
                                    $nouveauNom=$_POST['nom_Quizz'];
                                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                                    $mysqli->query("UPDATE `quizzeo`.`quizz` SET `titre` = '$nouveauNom' WHERE (`Id_quizz` = '$idQuizz');");
                                    header("Refresh:0");
                                } 
                        }
                    } else {
                        echo "Il n'y a pas de quizz disponible pour le moment";
                    }
                }
                ModifierQuizzNom($pseudoco,$mdpco,$idQuizz)
            ?>   
        </div>
        <div id="niveau">
            <label for="niveau">
                Difficulté du quizz :            
            </label>
            <?php
            $pseudoco="Tom";
            $mdpco="jesuisquizzeur";
            $idQuizz="1";
            function ModifierQuizzNiveau($pseudoco,$mdpco,$idQuizz){
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                    if (mysqli_num_rows($Quizz) > 0) {
                        // Affichage des données de chaque ligne
                        while ($ligne = mysqli_fetch_assoc($Quizz)) {
                            echo $ligne["difficulte"]."\r\n";
                            ?>
                                <div id="niveau">
                                    <label for="niveau">
                                        Choisissez le niveau de difficulté du quizz :            </label>
                                    <select name= "niveau" id="niveau">
                                        <option value= "débutant">Débutant</option>
                                        <option value= "facile">Facile</option>
                                        <option value= "intermédiaire">Intermédiaire</option>
                                        <option value= "difficile">Difficile</option>
                                        <option value= "expert">Expert</option>
                                    </select>
                                </div>
                                <input type="submit" name="modifier_niveauquizz" value="Modifier le niveau" class="submitconnexion">
                                <br>
                            <?php
                            if(isset($_POST["modifier_niveauquizz"])){
                                    $nouveauNiveau=$_POST['niveau'];
                                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                                    $mysqli->query("UPDATE `quizzeo`.`quizz` SET `difficulte` = '$nouveauNiveau' WHERE (`Id_quizz` = '$idQuizz');");
                                    header("Refresh:0");   
                            } 
                        }
                    } else {
                        echo "Il n'y a pas de quizz disponible pour le moment";
                    }
                }
                ModifierQuizzNiveau($pseudoco,$mdpco,$idQuizz)
            ?> 
        </div>
        <div id="categorie">
            <label for="categorie">
                Catégorie du quizz :
            </label>
            <?php
                        $pseudoco="Tom";
                        $mdpco="jesuisquizzeur";
                        $idQuizz="1";
                        function ModifierQuizzCategorie($pseudoco,$mdpco,$idQuizz){
                            $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                                $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                                if (mysqli_num_rows($Quizz) > 0) {
                                    // Affichage des données de chaque ligne
                                    while ($ligne = mysqli_fetch_assoc($Quizz)) {
                                        echo $ligne["categorie"]."\r\n";
                                        ?>
                                            <div id="categorie">
                                                <label for="categorie">
                                                    Choisissez la catégorie de votre quizz :
                                                </label>
                                                <select name= "categorie" id="categorie">
                                                    <option value= "sport">Sport</option>
                                                    <option value= "musique">Musique</option>
                                                    <option value= "cinema">Cinéma</option>
                                                    <option value= "culture_generale">Culture Generale</option>
                                                    <option value= "hist_geo">Histoire-géographie</option>
                                                </select>
                                            </div>
                                            <input type="submit" name="modifier_categoriequizz" value="Modifier la catégorie" class="submitconnexion">
                                            <br>
                                        <?php 
                                        if(isset($_POST["modifier_categoriequizz"])){
                                            $nouvelleCategorie=$_POST['categorie'];
                                            $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                                            $mysqli->query("UPDATE `quizzeo`.`quizz` SET `categorie` = '$nouvelleCategorie' WHERE (`Id_quizz` = '$idQuizz');");
                                            header("Refresh:0");   
                                        }
                                    }
                                } else {
                                    echo "Il n'y a pas de quizz disponible pour le moment";
                                }
                            }
                            ModifierQuizzCategorie($pseudoco,$mdpco,$idQuizz)
            ?> 
        </div>
    </div>
    <input type="submit" name="submit" value="Suivant" class="submit-suivant">
    <!-- <div class="bouton">
        <div class="suivant">
            <a href="Question.php">Suivant</a>
        </div>
    </div> -->
</form> 
    <script src="CreerQuizz.js"></script> 
</body>
</html>