<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz</title>
    <link rel="stylesheet" href="modificationQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <div class="organisation">
        <form action="modificationQuizz.php">
        
            <div id="nom_Quizz" class="Crea">
                <p>
                    <label for="nom_Quizz">
                    Nom du quizz:
                    </label>
                    <?php
                        // $pseudoco="Tom";
                        // $mdpco="jesuisquizzeur";
                        // $idQuizz="3";
                        // function ModifierQuizzNom($pseudoco,$mdpco,$idQuizz){
                        //     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                        //         $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                        //         //If at least one result is found, it displays it
                        //         if (mysqli_num_rows($Quizz) > 0) {
                        //             // Affichage des données de chaque ligne
                        //             while ($ligne = mysqli_fetch_assoc($Quizz)) {
                        //                 echo $ligne["titre"]."\r\n";
                    ?>
                    <br />
                    <label for="nom_Quizz">
                        Entrez un nom pour le Quizz :
                    </label>
                    <input id="nom_Quizz" class="case" type="text" name="nom_Quizz" placeholder="Nom du quizz"/>
                </p>
            </div>
            <input type="submit" name="modifier_nomquizz" value="Modifier le nom" class="submitconnexion">     
            <?php
                //When the button is clicked
                //      if(isset($_POST["modifier_nomquizz"])){
                //          //Retrieves the name of the quiz and will modify it in the database
                //          $nouveauNom=$_POST['nom_Quizz'];
                //          $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                //          $mysqli->query("UPDATE `quizzeo`.`quizz` SET `titre` = '$nouveauNom' WHERE (`Id_quizz` = '$idQuizz');");
                //          //Refresh the page once
                //          header("Refresh:0");
                //      } 
                // }
                
                //Displays an error message
                //      } else {
                //          echo "ERREUR NOM";
                //      }
                // }
                // ModifierQuizzNom($pseudoco,$mdpco,$idQuizz)
            ?>   

            <div id="niveau" class="Crea">
                <p>
                    <label for="niveau">
                        Difficulté du quizz :
                    </label>
                    <?php
                        // $pseudoco="Tom";
                        // $mdpco="jesuisquizzeur";
                        // function ModifierQuizzNiveau($pseudoco,$mdpco,$idQuizz){
                        //     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                        //     //Database search 
                        //     $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                        //         if (mysqli_num_rows($Quizz) > 0) {
                        //             // Displaying data for each row
                        //             while ($ligne = mysqli_fetch_assoc($Quizz)) {
                        //                 echo $ligne["difficulte"]."\r\n";
                    ?>
                    <br>
                    <label for="niveau">
                        Choississez le niveau de difficulté du quizz :
                    </label>
                    <select  class="case" name="niveau" id="niveau">
                        <option value= "débutant">Débutant</option>
                        <option value= "facile">Facile</option>
                        <option value= "intermédiaire">Intermédiaire</option>
                        <option value= "difficile">Difficile</option>
                        <option value= "expert">Expert</option>
                    </select>
                </p>
            </div>
            <input type="submit" name="modifier_niveauquizz" value="Modifier le niveau" class="submitconnexion">
            <?php
                //When the button is clicked
                //             if(isset($_POST["modifier_niveauquizz"])){
                //                     //Get the new level
                //                     $nouveauNiveau=$_POST['niveau'];
                //                     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                //                     //Replaces the old level in the database for the new one
                //                     $mysqli->query("UPDATE `quizzeo`.`quizz` SET `difficulte` = '$nouveauNiveau' WHERE (`Id_quizz` = '$idQuizz');");
                //                     header("Refresh:0");   
                //             } 
                //         }
                //     } else {
                //         echo "ERREUR NIVEAU";
                //     }
                // }
                // ModifierQuizzNiveau($pseudoco,$mdpco,$idQuizz)
            ?> 

            <div id="categorie" class="Crea">
                <p>
                    <label for="categorie">
                        Choisissez la catégorie de votre quizz :
                    </label>
                    <?php
                        // $pseudoco="Tom";
                        // $mdpco="jesuisquizzeur";
                        // function ModifierQuizzCategorie($pseudoco,$mdpco,$idQuizz){
                        //     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                        //         $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` WHERE Id_quizz='$idQuizz'");
                        //         if (mysqli_num_rows($Quizz) > 0) {
                        //             // Affichage des données de chaque ligne
                        //             while ($ligne = mysqli_fetch_assoc($Quizz)) {
                        //                 echo $ligne["categorie"]."\r\n";
                    ?>
                    <select class="case" name= "categorie" id="categorie">
                        <option value= "sport">Sport</option>
                        <option value= "musique">Musique</option>
                        <option value= "cinema">Cinéma</option>
                        <option value= "culture_generale">Culture Generale</option>
                        <option value= "hist_geo">Histoire-géographie</option>
                    </select>
                </p>
            </div>
            <input type="submit" name="modifier_categoriequizz" value="Modifier la catégorie" class="submitconnexion">
            <?php 
                //When the button is clicked
                    //     if(isset($_POST["modifier_categoriequizz"])){
                    //         //Get the new category
                    //         $nouvelleCategorie=$_POST['categorie'];
                    //         //Connection to the database
                    //         $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    //         //Replaces the database category with the new one saved
                    //         $mysqli->query("UPDATE `quizzeo`.`quizz` SET `categorie` = '$nouvelleCategorie' WHERE (`Id_quizz` = '$idQuizz');");
                    //         header("Refresh:0");   
                    //     }
                    // }
                //If no result, this error message is displayed
                    //     } else {
                    //         echo "ERREUR CATEGORIE";
                    //     }
                    // }
                    // ModifierQuizzCategorie($pseudoco,$mdpco,$idQuizz);
            ?> 
            <?php
            // function AffichageQuestion ($pseudoco,$mdpco,$idQuizz){
            //     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            //     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
            //     //Retrieves from the database the questions and answers of the selected quiz
            //     $question=$mysqli->query("SELECT * FROM `quizzeo`.`question` where Id_quizz=$idQuizz;");
            //     if (mysqli_num_rows($question) > 0) {
            //         $i=1;
            //         //Show questions
            //         while ($ligne = mysqli_fetch_assoc($question)) {
 
            //             echo " Question $i : " . $ligne["intituleQuestion"]. " choix 1 : " . $ligne["choix_1"]. " Choix 2 : " . $ligne["choix_2"]." Choix 3 : " . $ligne["choix_3"]." Choix 4 : " . $ligne["choix_4"]." Reponse : " . $ligne["reponse"].""."\r\n";
            //                 $i++;
            //             }
                        
            //         } else {
            //             echo "Veuillez saisir une question valide";
            //         }
            ?>

            <div id="nom_Question" class="Crea">
                <p>
                    <label for="nom_Question">
                        Entrez le titre de la réponse à modifier :
                    </label>
                    <input id="nom_Question" class="case" type="text" name="nom_Question" placeholder="Nom de la question"/>
                </p>
            </div>
            
            <br>
            <input type="submit" name="modifier" value="Modifier la question" class="submitconnexion">
            <input type="submit" name="suppr" value="Supprimer la question" class="submitconnexion">
            <?php
                //If the button is clicked, the quiz is selected and all the questions are displayed in order to be able to modify or delete them
                    // if(isset($_POST["modifier"])){
                    //     $quest=$_POST["nom_Question"];
                    //     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    //     $question=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE (`Id_quizz` = '$idQuizz' AND `intituleQuestion` = '$quest');");
                    //     if (mysqli_num_rows($question) > 0) {
                    //         while ($ligne = mysqli_fetch_assoc($question)) {
                    //             echo $ligne["intituleQuestion"]. " choix 1 : " . $ligne["choix_1"]. " Choix 2 : " . $ligne["choix_2"]." Choix 3 : " . $ligne["choix_3"]." Choix 4 : " . $ligne["choix_4"]." Reponse : " . $ligne["reponse"].""."\r\n";
                    //                 $i++;
                    //         }
                    //     } else {
                    //         echo "Question Invalide";
                    //     }
                    // }
                //If the button is clicked, the question is deleted
            //         if(isset($_POST["suppr"])){
            //             $quest=$_POST["nom_Question"];
            //             $mysqli = new mysqli("localhost", "root", "", "quizzeo");
            //             $question=$mysqli->query("DELETE FROM `quizzeo`.`question` WHERE (`Id_quizz` = '$idQuizz' AND `intituleQuestion` = '$quest');");
            //         }    
                    
            // }
            // AffichageQuestion($pseudoco,$mdpco,$idQuizz);
            ?>
            <input type="submit" name="supprimer" value="Supprimer le Quizz" class="submit-supprimer">
            <input id="retour2" type="submit"  name="retour" value="Retour" class="submit-retour" onclick="history.go(-1)">
            <?php
            //Deletes the questions and the quiz in the database
            //     function SupprimerQuizz($idQuizz){
            //         $mysqli = new mysqli("localhost", "root", "", "quizzeo");
            //         $mysqli->query("DELETE FROM `quizzeo`.`quizz` WHERE (`Id_quizz` = '$idQuizz');");
            //         $mysqli->query("DELETE FROM `quizzeo`.`question` WHERE (`Id_quizz` = '$idQuizz');");
            //         header("Refresh:0");
            //         //envoyer sur la page principale de la gestion de quizz
            //         echo "Votre quizz à été supprimé";
            //     } 
            // //When the button is clicked executes the delete quiz and questions function
            // if(isset($_POST["supprimer"])){
            //     SupprimerQuizz($idQuizz);
            // }
            ?>
        </form>
    </div>
    <script src="CreerQuizz.js"></script> 
</body>
</html>