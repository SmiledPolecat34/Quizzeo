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
    <form action="creationQuizz.php" method="post">
    <div class="organisation">
        <div id="Crea" >
            <label for="nom_Quizz">
                Entrez un nom pour le Quizz:
            </label>
            <input id="nom_Quizz" class="case" type="text" name="nom_Quizz" placeholder="Nom du quizz"/>
        </div>
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
        <?php
        session_start();
        $pseudoco=$_SESSION['pseudo'];
        $mdpco=$_SESSION['mdp'];
        function NouveauQuizz($pseudoco,$mdpco){
            $nomQuizz = $_POST['nom_Quizz'];
            $niveauQuest=$_POST['niveau'];
            $categorieQuest=$_POST['categorie'];
            $dateCreation=date('y-m-d');
        
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                $idUti=$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
                // $id_utilisateur = $idUti['Id_utilisateur'];
                $user = mysqli_fetch_array($idUti);
                $id_utilisateur = $user["Id_utilisateur"];
                $mysqli->query("INSERT INTO `quizzeo`.`quizz` (`titre`, `difficulte`, `date_creation`, `categorie`, `Id_utilisateur`) VALUES ('$nomQuizz', '$niveauQuest', '$dateCreation', '$categorieQuest','$id_utilisateur');");
        
        }
        NouveauQuizz($pseudoco,$mdpco);
        ?>
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